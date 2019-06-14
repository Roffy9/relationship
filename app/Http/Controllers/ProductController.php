<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
	public function create(Request $request) {
		$product = new Product;

		$product->name = 'God of War';
		$product->price = 40;

		$product->save();

		$category = Category::find([3, 4]);
		$product->categories()->attach($category);

		return "Success!";

	}

	public function show(Product $product) {
		return view('products.show', compact('product'));
	}

	public function detachCategory(Product $product) {
		$category = Category::find(4);

		$product->categories()->detach($category);

		return "Sucees Remove Category!!!";
	}
}
