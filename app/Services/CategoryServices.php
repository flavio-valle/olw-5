<?php

namespace App\Services;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;

class CategoryServices {

    public function list() {
        $Categorys = Category::paginate(10);

        return $Categorys;
    }

    public function store(CategoryStoreRequest $request) {
        $Category = Category::create($request->validated());

        return $Category;
    }

    public function update(CategoryStoreRequest $request, Category $Category) {
        $Category = Category::update($request->validated());

        return $Category;
    }

    public function destroy(Category $Category) {
        $Category->delete();
    }
    
}