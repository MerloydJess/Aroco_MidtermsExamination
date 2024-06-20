<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Laptop', 'price' => 999, 'description' => 'A gaming laptop'],
            ['name' => 'Smartphone', 'price' => 699, 'description' => 'A fast smartphone'],
            ['name' => 'Tablet', 'price' => 499, 'description' => 'A very good tablet'],
            ['name' => 'Smartwatch', 'price' => 199, 'description' => 'A shiny watch'],
            ['name' => 'Headphones', 'price' => 149, 'description' => 'Noise-cancelling'],
        ];

        return view('products.index', compact('products'));
    }
}
