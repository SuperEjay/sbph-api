<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {}

    public function save(CreateProductRequest $request)
    {
        $request->validated();
    }
}
