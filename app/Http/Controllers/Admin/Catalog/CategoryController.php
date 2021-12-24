<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Redirect;

use App\Models\oc_category_to_store;

class CategoryController extends Controller
{
    public function index(){

        $store_id = 46;

        $category=oc_category_to_store::with('getCategoryDescriptionWithProducts')->join('oc_category', 'oc_category.category_id', '=', 'oc_category_to_store.category_id')->where('oc_category_to_store.store_id','=',$store_id)->orderBy('oc_category.sort_order','asc')->paginate(20);
    
        // dd($category);

        return Inertia::render('Admin/Catalog/Category/Category',[
            'categories' => $category
            ]);
    
    }

    public function create(){

        return Inertia::render('Admin/Catalog/Category/CreateCategory',[
            
            ]);
    }

    public function delete(Request $request){
        oc_category_to_store::whereIn('category_id', $request)->delete();
        return redirect()->back();
    }
}
