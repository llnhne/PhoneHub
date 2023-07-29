<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\EditingController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UpdatingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('admin/login',function(){
    return view('admin.login');
});

Route::post('admin/login', [AdminController::class, 'loginPost'])->name('admin.loginPost');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('admin/pages404', [AdminController::class, 'pages404'])->name('admin.pages404');


Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/statistics', [AdminController::class, 'statistics'])->name('admin.statistics');
    Route::get('/admin/listing/{model}', [ListingController::class, 'index'])->name('listing.index');
    Route::post('/admin/listing/{model}', [ListingController::class, 'index'])->name('listing.index');
    Route::get('/admin/editing/{model}', [EditingController::class, 'create'])->name('editing.create');
    Route::post('/admin/editing/{model}', [EditingController::class, 'store'])->name('editing.store');
    Route::get('/admin/updating/{model}/{id}', [UpdatingController::class, 'edit'])->name('updating.edit');
    Route::put('/admin/updating/{model}/{id}', [UpdatingController::class, 'update'])->name('updating.update');
    Route::delete('/admin/delete/{model}/{id}', [ListingController::class, 'delete'])->name('listing.delete')->withTrashed();
    Route::get('/admin/ct/{model}/{id}', [ListingController::class, 'show'])->name('listing.show');
    Route::get('/admin/archive/{model}', [ListingController::class, 'archive'])->name('listing.archive');
});

Route::get('/', [HomeController::class, 'index'])->name('user.index');
Route::get('/products', [HomeController::class, 'product'])->name('user.product');
Route::get('/contact', [HomeController::class, 'contact'])->name('user.contact');
Route::get('/chitietsanpham/{id}', [DetailController::class, 'show'])->name('user.detail');
Route::get('/danhmuc-sanpham/{id}', [CategoryController::class, 'show'])->name('user.showcategory');
Route::get('/thuonghieu-sanpham/{id}', [BrandController::class, 'show'])->name('user.showbrand');
Route::get('/category/{name}/{id}', [HomeController::class, 'category'])->name('user.headeruser');


Route::post('/save-cart', [CartController::class, 'save_cart'])->name('user.detailt');
Route::get('/show-cart', [CartController::class, 'show_cart'])->name('cart.showcart');

// Route::get('admin/register',function(){
//     return view('admin.register');
// });

// Route::get('admin/forget',function(){
//     return view('admin.forget');
// });

