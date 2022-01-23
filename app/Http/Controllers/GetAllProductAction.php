<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GetAllProductAction extends Controller
{
    public function __invoke()
    {
        return $this->response([
            'products' => Product::select([
                'id', 'title', 'picture_thumb', 'price'
            ])->get()
        ]);
    }
}
