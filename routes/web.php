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

Route::get('/', 'MainController@index')->name('main');

Route::get('products', 'ProductsController@index')->name('products.index');

//Muestra el formulario para crear un producto
Route::get('products/create', 'ProductsController@create')->name('products.create');

Route::post('products', 'ProductsController@store')->name('products.store');

Route::get('products/{product}', 'ProductsController@show')->name('products.show');

Route::get('products/{product}/edit', 'ProductsController@edit')->name('products.edit');

Route::match(['put', 'patch'], 'products/{product}', 'ProductsController@update')->name('products.update');

Route::delete('products/{product}', 'ProductsController@destroy')->name('products.destroy');

// ESTO ES LA PRUEBA DEL SEGUNDO QUIZ XD
// Route::get('{value}', function ($value) {
// 	return $value;
// });