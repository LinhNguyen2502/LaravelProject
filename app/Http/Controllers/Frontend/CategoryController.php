<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Services\ProductService;

class CategoryController extends Controller
{
    protected $categoryService;

    protected $productService;

    public function __construct(CategoryService $categoryService, ProductService $productService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }
    public function show($slug)
    {  
        $category = $this->categoryService->findBySlug($slug);
        $productFeature = $this->productService->getByCategoryId($category->id);
        
        return view('frontend.categories.show', [
            'headTitle' => $category->name ?? null,
            'productFeature' => $productFeature
        ]);
    }
}
