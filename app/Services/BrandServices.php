<?php

namespace App\Services;

use App\Http\Requests\BrandStoreRequest;
use App\Models\Brand;

class BrandServices {

    public function list() {
        $brands = Brand::paginate(10);

        return $brands;
    }

    public function store(BrandStoreRequest $request) {
        $brand = Brand::create($request->validated());

        return $brand;
    }

    public function update(BrandStoreRequest $request, Brand $brand) {
        $brand = Brand::update($request->validated());

        return $brand;
    }

    public function destroy(Brand $brand) {
        $brand->delete();
    }
    
}