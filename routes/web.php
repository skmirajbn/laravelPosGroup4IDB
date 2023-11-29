<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesorderController;
use App\Http\Controllers\CartController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin');
})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('admin', [DashboardController::class, 'index']);

require __DIR__ . '/auth.php';

/*---------------unit---------------- */
Route::get('/addunits', [UnitController::class, 'create'])->name('unit');
Route::post('/storeunits', [UnitController::class, 'store'])->name('unit_add');
Route::get('/viewunits', [UnitController::class, 'show'])->name('unit_show');
Route::get('/unit_edit/{id}/user', [UnitController::class, 'edit'])->name('unit_editview');
Route::put('/unit_update/{id}/user', [UnitController::class, 'update'])->name('unit_update');
Route::get('/unit_delete/{id}/', [UnitController::class, 'destroy'])->name('unit_destroy');

/*-----------------------brand-------------------*/
Route::get('/addbrands', [BrandController::class, 'create'])->name('brand');
Route::post('/storebrands', [BrandController::class, 'store'])->name('brand_add');
Route::get('/viewbrands', [BrandController::class, 'show'])->name('brand_show');
Route::get('/brand_edit/{id}/user', [BrandController::class, 'edit'])->name('brand_editview');
Route::put('/brand_update/{id}/user', [BrandController::class, 'update'])->name('brand_update');
Route::get('/brand_delete/{id}/', [BrandController::class, 'destroy'])->name('brand_destroy');

// /*-----------------------Categories-----------------------*/
Route::get('/addcategory', [CategoriesController::class, 'create'])->name('category');
Route::post('/storecategory', [CategoriesController::class, 'store'])->name('category_add');
Route::get('/viewcategory', [CategoriesController::class, 'show'])->name('category_show');
Route::get('/category_edit/{id}/user', [CategoriesController::class, 'edit'])->name('category_editview');
Route::put('/category_update/{id}/user', [CategoriesController::class, 'update'])->name('category_update');
Route::get('/category_delete/{id}/', [CategoriesController::class, 'destroy'])->name('category_destroy');

/*----------------------------------suppliers-------------------------*/
Route::get('/addsupp', [SuppliersController::class, 'create'])->name('suppliers');
Route::post('/storesupp', [SuppliersController::class, 'store'])->name('supp_add');
Route::get('/viewsupp', [SuppliersController::class, 'show'])->name('supp_show');
Route::get('/supp_edit/{id}/user', [SuppliersController::class, 'edit'])->name('supp_editview');
Route::put('/supp_update/{id}/user', [SuppliersController::class, 'update'])->name('supp_update');
Route::get('/supp_delete/{id}/', [SuppliersController::class, 'destroy'])->name('supp_destroy');


/*--------------------custmesr------------------------------- */

Route::get('/addcustomer', [CustomersController::class, 'create'])->name('customer');
Route::post('/storecustomer', [CustomersController::class, 'store'])->name('customer_add');
Route::get('/viewcustomer', [CustomersController::class, 'show'])->name('customer_show');
Route::get('/customer_edit/{id}/user', [CustomersController::class, 'edit'])->name('customer_editview');
Route::put('/customer_update/{id}/user', [CustomersController::class, 'update'])->name('customer_update');
Route::get('/customer_delete/{id}/', [CustomersController::class, 'destroy'])->name('customer_destroy');



/*----------------------------product-------------------------*/

Route::get('/addproducts', [ProductController::class, 'create'])->name('product');
Route::post('/storeproducts', [ProductController::class, 'store'])->name('pro_add');
Route::get('/viewproducts', [ProductController::class, 'index'])->name('pro_show');
Route::get('/pro_edit/{id}/user', [ProductController::class, 'edit'])->name('pro_editview');
Route::put('/pro_update/{id}/user', [ProductController::class, 'update'])->name('pro_update');
Route::get('/pro_delete/{id}/', [ProductController::class, 'destroy'])->name('pro_destroy');

/*----------------------------salesorder----------------------*/

Route::get('/salesorder', [SalesorderController::class, 'index'])->name('salesorder');

/*----------------------------cart----------------------*/
Route::post('/add-cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart-update/{rowId}', [CartController::class, 'CartUpdate'])->name('update');
Route::get('/cart-remove/{rowId}', [CartController::class, 'CartRemove'])->name('remove');
Route::post('/create-invoice', [CartController::class, 'CreateInvoice'])->name('invoice');


// New Routes Sk Miraj

Route::get('/order/sales-order', [SalesorderController::class, 'create'])->name('order.sales-order');



