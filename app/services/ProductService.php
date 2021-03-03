<?php
namespace app\Services;
use App\Models\Product;

class ProductService
{
    public function bestSeller($limit = 5)
    {
        return Product::join('order_details', 'order_details.product_id', 'products.id')
        ->selectRaw('sum(qty) as qty')
        ->groupBy('products.id')
        ->orderBy('qty', 'desc')
        ->limit(4)
        ->addSelect('products.id', 'products.name', 'products.image', 'products.price')
        ->get();
    }

    public function feature($limit = 15)
    {
        return Product::where('is_feature', true)->limit($limit)->get();
    }

    public function getByCategoryId($categoryId)
    {
        return Product::join('category_product', 'category_product.product_id', 'products.id')
        ->where('category_product.category_id', $categoryId)
        ->get();
    }
    
    public function findById($id)
    {
        return Product::find($id);
    }
}
