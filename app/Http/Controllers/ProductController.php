<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller // controllerlar view dan so'rov qabul qilib, qayta ishlaydi, modeldan ma'lumot olib qayta ishlaydi va yana view ga qaytarib beradi
{
    public function show($name = null){
        // $pName = 'Notebook';
        return view('products.product', [
            'productName' => $name
        ]);
    }

    public function list(){
        $products = [
            'Notebook',
            'Telephone',
            'Refrigerator',
            'Book',
            'TV'
        ];

        return view('products.products', compact('products'));
    }
}
