<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\ChangeController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
// use App\Http\Controllers\detailPDController;
use App\Http\Controllers\FeedbackController;












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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/product/{category_id}', [ProductController::class, 'product'])->name('productBycategoriesId');

Route::get('/search', [ProductController::class, 'search'])->name('product.search');
Route::get('/product/detail/{product_id}', [ProductController::class, 'detail'])->name('productdetail');
Route::get('/categories', [ProductController::class, 'getproductsByCategories'])->name('categories');

Route::get('/contact', [ContactController::class, 'ctact'])->name('contact');
Route::get('/about', [AboutController::class, 'abt'])->name('about');

Route::get('/new', [NewController::class, 'new'])->name('new');
Route::get('/forgot', [ForgotController::class, 'forgot'])->name('forgot');
Route::get('/change', [ChangeController::class, 'change'])->name('change');
Route::get('/update', [UpdateController::class, 'update'])->name('update');

// Route::get('/detailpd', [detailPDController::class, 'detailpd'])->name('detailpd');
Route::get('/feedback', [FeedbackController::class, 'feedback'])->name('feedback');

// admin
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/productlist', [AdminController::class, 'productlist'])->name('productlist');
Route::post('/productadd', [AdminController::class, 'productadd'])->name('productadd');
Route::get('/productdelete/{id}', [AdminController::class, 'productdelete'])->name('productdelete');
Route::get('/productupdateform/{id}', [AdminController::class, 'productupdateform'])->name('productupdateform');
Route::post('/productupdate', [AdminController::class, 'productupdate'])->name('productupdate');



Route::get('/updateproducts', [AdminController::class, 'updateproducts'])->name('updateproducts');
Route::get('/users', [AdminController::class, 'users'])->name('users');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'postlogin']);

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'postregister']);

Route::get('/logout', function(){
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::prefix('api')->group(function () {
    Route::resource('/cart', CartController::class);
});



