<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myarzhan extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        return view('pages.services');
    }
     public function contact() {
        return view('pages.contact');
    }

    public function products() {
        $products = [
            ['name' => 'iPhone 15', 'price' => 1200],
            ['name' => 'Samsung Galaxy S23', 'price' => 1100],
            ['name' => 'Google Pixel 8', 'price' => 1000],
        ];
        return view('pages.products', compact('products'));
    }
}
