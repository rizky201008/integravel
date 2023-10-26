<?php

namespace App\Http\Controllers;

use App\Models\Rice;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProducts()
    {
        return response()->json(Rice::all());
    }
}
