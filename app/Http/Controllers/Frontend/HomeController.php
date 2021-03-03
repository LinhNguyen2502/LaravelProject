<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use Illuminate\Http\Request;
use App\Services\SliderService;
use App\Services\ProductService;

class HomeController extends Controller
{
    protected $sliderService;

    protected $productService;

    public function __construct(SliderService $sliderService, ProductService $productService)
    {
        $this->sliderService = $sliderService;
        $this->productService = $productService;

    }
    

    public function index()
    {
        //$productSeller = $this->ProductService->bestSeller();

        return view('frontend.home.index',[
            'sliders' => $this->sliderService->all(),
            'productSeller' => $this->productService->bestSeller(),
            'productFeature' => $this->productService->feature(),
        ]);
    }
}
