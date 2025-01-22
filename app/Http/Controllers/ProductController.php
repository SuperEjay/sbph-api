<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\ProductModel;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $products = ProductModel::all();

        return $this->successResponse($products);
    }

    public function store(CreateProductRequest $request)
    {
        $product = ProductModel::create($request->all());
        return $this->successResponse($product);
    }
}
