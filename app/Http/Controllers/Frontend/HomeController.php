<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $testimonials = Testimonial::where('is_active', 1)
        ->latest('id')
        ->limit(3)
        ->select(['id', 'client_name', 'client_designation', 'client_message', 'client_image'])
        ->get();


        $categories = Category::where('is_active', 1)
        ->latest('id')
        ->limit(5)
        ->select(['id', 'title', 'category_image','slug'])
        ->get();

        $products = Product::where('is_active',1)
            ->latest('id')
            ->select('id','name','slug','product_price', 'product_stock', 'product_rating', 'product_image')
            ->paginate(12);

        //return $categories;
        // return $testimonials;
        return view('frontend.pages.home', compact(
            'testimonials',
            'categories',
            'products'
        ));

    }
    public function about(){
        return view('frontend.pages.about');

    }
    // public function landingPage(){
    //     return view('frontend.pages.landingPage');
    // }

    public function shopPage()
    {
        $allproducts = Product::where('is_active', 1)
        ->latest('id')
        ->select('id','name','slug','product_price', 'product_stock', 'product_rating', 'product_image')
        ->paginate(12);

        $categories = Category::where('is_active', 1)
        ->with('products')
        ->latest('id')
        ->limit(5)
        ->select(['id', 'title', 'slug'])
        ->get();

        return view('frontend.pages.shop', compact(
            'allproducts',
            'categories'

        ));
    }

    public function productDetails($product_slug)
    {
        $product = Product::whereSlug($product_slug)
            ->with('category','productImages')
            ->first();

        $related_products = Product::whereNot('slug', $product_slug)->select('id', 'name', 'slug', 'product_price', 'product_image')
        ->limit(4)
        ->get();
        return view('frontend.pages.single-product', compact('product', 'related_products'));
    }
}
