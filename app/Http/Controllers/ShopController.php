<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Intervention\Image\ImageManager;
use App\Products;

class ShopController extends Controller
{
    public function index() {
    	return view('shop.index');
    }

    public function add() {
    	return view('shop.add');
    }

    public function submit(Request $request){
    	$this->validate($request, [
    		'product_title' => 'required|min:1|max:255',
    		'product_description' => 'required|min:10',
            'product_price' => 'required|numeric',
            'product_image' => 'required|image',

    	]);

        $newProduct = new Products();
        $newProduct->title = $request->product_title;
        $newProduct->description = $request->description;
        $newProduct->price = $request->product_price;

        $newProduct->save();
    }
}
