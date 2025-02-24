<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Naruto Action Figure', 'price' => 29.99, 'image' => 'naruto.jpg'],
            ['name' => 'One Piece Luffy Hat', 'price' => 19.99, 'image' => 'luffy_hat.jpg'],
            ['name' => 'Attack on Titan Hoodie', 'price' => 39.99, 'image' => 'aot_hoodie.jpg'],
        ];

        return view('products', compact('products'));
    }
}