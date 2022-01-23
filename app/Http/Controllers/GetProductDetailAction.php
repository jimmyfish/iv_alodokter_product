<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GetProductDetailAction extends Controller
{
    public function __invoke(Request $request, $id)
    {
        return $this->response([
            'product' => Product::find($id)
        ]);
    }
}
