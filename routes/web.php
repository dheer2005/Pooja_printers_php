<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerController;
use App\Models\customer;
use App\Models\Report;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//logout
Route::get('/logout',function(){
    Session::forget('customers');
    return redirect('Login');
});

Route::view('/welcome', 'welcome');
Route::view('/Product', 'Product');
Route::view('/Cart', 'Cart');
Route::view('/ContectUs', 'registration');
Route::view('/Login', 'Login');
Route::view('/Category', 'Category');
Route::view('/Admin/Dashboard', 'Admin/Dashboard');

Route::get('/', [Controller::class,'wecome']) ;

Route::post('/', [CustomerController::class,'index']);

Route::post('/Report', [CustomerController::class,'Report']) ;
Route::get('/Report', [CustomerController::class,'help']) ;
Route::view('/Report', 'Report');

Route::get('/Registration', [Controller::class,'registration']) ;
Route::get('/Registration', [Controller::class,'login']) ;

Route::get('/', [Controller::class,'home']) ;

// Route::get('/Login', [CustomerController::class,'Registration']) ;
Route::post('/Login', [CustomerController::class,'Login']) ;


Route::get('/Product', [ProductController::class,'index']) ;
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addtoCart'])->name('add_to_Cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update_cart');
Route::get('remove-from-cart/{id}', [ProductController::class, 'deleteProduct'])->name('remove_from_cart');