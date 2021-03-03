<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $name = 'Nguyen Van A';
        $email = 'abc@gmail.com';
        $phone = 123456;
        $socials = ['Facebook', 'Instagram', 'SnapChat', 'Tiktok'];
        $gender = 2; //1: nam, 2: nu
        $today = 5;
        $products = [
            [
                'id' => 1,
                'name' => 'Iphone4'
            ],
            [
                'id' => 2,
                'name' => 'Iphone5'
            ],
            [
                'id' => 3,
                'name' => 'Iphone6'
            ],
        ];

        return view('frontend.products.index', [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'socials' => $socials,
            'gender' => $gender,
            'today' => $today,
            'products' => $products
        ]);
    }
    public function show($slug)
    {
        $menus = [
            'Home',
            'About',
            'Service',
            'Products',
            'Contact'
        ];
        return view('frontend.products.show_children',[
            'listMenu' => $menus
        ]);
    }
}
