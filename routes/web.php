<?php

use App\Http\Livewire\CardComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckOutComponent;
use App\Http\Livewire\DeatailsComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminEditcategoryComponent;
use App\Http\Livewire\Admin\AdminProductCategoryComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class);
Route::get('/shop', ShopComponent::class);
Route::get('/card', CardComponent::class)->name('product.cart');
Route::get('/checkout', CheckOutComponent::class);
Route::get('/product/{slug}', DeatailsComponent::class)->name('product.details');
Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');
Route::get('/search', SearchComponent::class)->name('search.product');

Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
Route::get('/amin/category/add', AdminAddCategoryComponent::class)->name('admin.addCategory');
Route::get('/amin/category/edit/{category_slug}', AdminEditcategoryComponent::class)->name('admin.editCategory');
Route::get('/admin/products', AdminProductCategoryComponent::class)->name('admin.products');
Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addProduct');
Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editProduct');





// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


//for users
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');

});


//for admin
Route::middleware(['auth:sanctum', 'verified', "authadmin"])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    // Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');

});
