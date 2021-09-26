<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::get('add_wallet', 'App\Http\Controllers\WalletController@add_wallet');

Route::get('update_wallet', 'App\Http\Controllers\WalletController@update_wallet');

Route::get('/', 'App\Http\Controllers\CustomerController@index');
Route::get('/customer/{customer_id}', 'App\Http\Controllers\CustomerController@show');
Route::get('/customer/{customer_id}/update', 'App\Http\Controllers\CustomerController@update');
Route::get('/customer/{customer_id}/delete', 'App\Http\Controllers\CustomerController@delete');

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
// part 1
/*class Bar
{

}

class Far
{

    protected $bar;

    public function __construct(Bar $bar)
    {
        $this->bar = $bar;
    }
}*/

/**
 *  instead of  $far = new Far(new Bar);
 */

/*App::bind('Far' , function (){
    return new Far(new Bar() , 12345678);
});*/
/*Route::get('/', function (Far $far) {
    dd($far);
});*/

// part 2

/*interface FarInterface {}

class Far implements  FarInterface {}

App::bind('FarInterface' , 'Far');

Route::get('/', function (FarInterface $far) {
    dd($far);
});*/


class Far{}

// add class in service container
// get class from service container app()->make('far')

Route::get('pay', 'App\Http\Controllers\payOrderController@store');


