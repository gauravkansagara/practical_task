<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProduct(Request $request)
    {
        $input = $request->product_data;
        $sorting = $request->sorting; 
        $data = Product::where('product_name', 'LIKE', '%' . $input . '%')
                    ->orWhere('product_description', 'LIKE', '%' . $input . '%')
                    ->orWhere('price', 'LIKE', '%' . $input . '%');
        if($sorting != ""){
            $data->orderBy('price', $sorting);
        }
        $resultData = $data->get();
        $result['data'] = $resultData;
        return response()->json($result);
    }
}
