<?php

namespace App\Http\Controllers;

class ProductsController extends Controller {

	public function index() {
		return view('Products.index');
	}

	public function create() {
		return 'This the CREATE FROM CONTROLLER';
	}
	public function store() {
		//
	}
	public function show($product) {
		return view('Products.show');
	}
	public function edit($product) {
		return "Showing the form to edit the product with id {$product} FROM CONTROLLER";
	}
	public function update($product) {
		//
	}
	public function destroy($product) {
		//
	}
	//añadiendo controladores y simplificando rutas
}
