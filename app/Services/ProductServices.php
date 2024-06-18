<?php

namespace App\Services;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;

class ProductServices {

    public function list() {
        $products = Product::paginate(10);

        return $products;
    }

    public function store(ProductStoreRequest $request) {
        $product = Product::create($request->validated());

        return $product;
    }

    public function update(ProductStoreRequest $request, Product $product) {
        $product = Product::update($request->validated());

        return $product;
    }

    public function destroy(Product $product) {
        $product->delete();
    }
    
}