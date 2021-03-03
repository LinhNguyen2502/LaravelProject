<?php
namespace App\Services;
use App\Models\Product;

class CartService
{
    public function store($productId)
    {
        $cart = session()->get('cart') ?? collect() ;
        $product = Product::find($productId);

        if($cart->count() === 0){
            $product->qty = 1;
            $cart->push($product);
        } else {
            $checkExist = $cart->where('id', $productId)->count();

            if($checkExist === 0){
                $product->qty = 1;
                $cart->push($product);
            } else {
                foreach ($cart as $item) {
                    if ($item->id == $productId) {
                        $item->qty += 1;
                    }
                }
            }
            
            //dd('san pham da co trong gio hang!');
        }
        session()->put('cart', $cart);
        //Session Key: cart
        
    }

    public function total()
    {
        $total = 0;
        $cart = session()->get('cart') ?? collect();

        foreach ($cart as $item)
        {
            $total += $item->qty;
        }

        return $total;
    }

    public function all()
    {
        return session()->get('cart') ?? collect();
    }

    public function delete($productId)
    {
        $products = session()->get('cart') ?? collect();
        
        if($productId != 'all'){
            $filtered = $products->reject(function ($product) use ($productId) {
                return $product->id == $productId;
            });

            return session()->put('cart', $filtered);
        }

        return session()->forget('cart');
    }

    public function update($qtyArray)
    {
        $products = session()->get('cart') ?? collect();
        if($qtyArray){
            foreach($qtyArray as $productId => $qty){
                if($qty>0) {
                    foreach($products as $product){
                        if($product->id == $productId){
                            $product->qty = $qty;
                        }
                    }
                }
            }
        }
        //dd($products);
        return session()->put('cart', $products);
    }
}


?>