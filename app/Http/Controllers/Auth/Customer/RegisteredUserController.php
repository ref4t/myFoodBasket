<?php

namespace App\Http\Controllers\Auth\Customer;

use App\Http\Controllers\Controller;
use App\Models\oc_customer;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return Inertia::render('Auth/Register');
    }

    private function rules()
    {
        return [
            'gender' => 'required|numeric',
            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'email' => 'required|string|email|max:96|unique:oc_customer',
            'phone' => 'required|numeric',
            'password' => ['required', 'confirmed', Rules\Password::min(8)],
        ];
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) { // to get errors in json format
            return response()->json($validator->messages(), 200, ['status' => 'error']);
        }

        $customer = oc_customer::create([
            'store_id' => 11111,
            'firstname' => $request->firstName,
            'lastname' => $request->lastName,
            'email' => $request->email,
            'telephone' => $request->phone,
            'fax' => '',
            'password' => Hash::make($request->password),
            'salt' => Str::random(9),
            'cart' => NULL,
            'wishlist' => NULL,
            'newsletter' => 0,
            'address_id' => 11111,
            'customer_group_id' => 1,
            'ip' => $request->ip(),
            'status' => 1,
            'approved' => 1,
            'token' => '',
            'date_added' => date("Y-m-d H:i:s"),
            'gender_id' => $request->gender
        ]);

        return response()
            ->json(['status' => 'success', 'message' => 'Customer created successfully.'], 200);

        // event(new Registered($user));

        // Auth::guard('customer')->login($user);

        // return redirect(RouteServiceProvider::HOME);
    }
}
