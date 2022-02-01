<?php

namespace App\Http\Controllers;

class ProductsController extends Controller {
	public function index() {
		return 'This is the list of products from CONTROLLER';
	}

	public function create() {
		return 'This the CREATE FROM CONTROLLER';
	}
	public function store() {
		//
	}
	public function show($product) {
		return "Showing the product with id {$product} from CONTROLLER";
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
