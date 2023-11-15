<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;


class WelcomeController extends Controller
{
    public function index(): View
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }
}    