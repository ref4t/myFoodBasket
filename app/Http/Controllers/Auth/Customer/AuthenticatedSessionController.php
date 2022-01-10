<?php

namespace App\Http\Controllers\Auth\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\CustomerLoginRequest;
use Illuminate\Support\Facades\Password;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Inertia\Inertia;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CustomerLoginRequest $request)
    {
        if ($request->needToResetPassword()) { // sent password reset link for first time
            // This is token generator for reset password link
            // you can send email from app\Http\Controllers\Auth\Customer\PasswordResetLinkController.php store function
            return response()
                ->json([
                    'status' => 'success', 
                    'message' => 'Customer need to reset password.',
                    'token' => Password::broker()->createToken($request),
                    // sample url: http://myfoodbasket.test/customer/reset-password/{token}
                ]);
        }
        $request->authenticate();
        $request->session()->regenerate();

        // return redirect()->intended(RouteServiceProvider::CUSTOMER_HOME);
        return response()
            ->json(['status' => 'success', 'message' => 'Customer successfully logged in.'], 200);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/customer/login');
    }
}
