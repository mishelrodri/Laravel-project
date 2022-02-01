 <?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// RUTAS DE RECURSOS, es importante el orden de las rutas ya que podrian ser enclipsadas

Route::get('/', function () {
	return view('welcome');
})->name('main');

Route::get('products', function () {
	return 'Esta es la lista de productos';
})->name('products.index');

//Muestra el formulario para crear un producto
Route::get('products/create', function () {
	return 'Formulario para crear productos';
})->name('products.create');

Route::post('products', function () {
	//return 'Formulario para crear productos';
})->name('products.store');

Route::get('products/{product}', function ($product) {
	return "Showing product with id {$product}";
})->name('products.show');

Route::get('products/{product}/edit', function ($product) {
	return "Showing the form to edit the product with id {$product}";
})->name('products.edit');

Route::match(['put', 'patch'], 'products/{product}', function ($product) {
	//return "Showing product with id {$product}";
})->name('products.update');

Route::delete('products/{product}', function ($product) {
	//return "Showing product with id {$product}";
})->name('products.destroy');
