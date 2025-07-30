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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', function() {
    return view('home');
})->name('home');

use App\Models\Product;

use Illuminate\Support\Facades\DB;



Route::get('/', function () {
    $products = DB::table('products')->get()->toArray();
    return view('home', compact('products'));
})->name('home');



Route::get('/home&kitchen', function () {
    return view('home&kitchen');
});

Route::get('/fruits&vegetables', function () {
    return view('fruits&vegetables');
});

Route::get('/babyCare', function () {
    return view('babyCare');
});



Route::get('/cloths', function () {
    return view('cloths');
});



Route::get('/health', function () {
    return view('health');
});

Route::get('/homemadeMasala', function () {
    return view('homemadeMasala');
});

Route::get('/craftItems', function () {
    return view('craftItems');
});

Route::get('/fish&meat', function () {
    return view('fish&meat');
});


Route::get('/cleaning&household', function () {
    return view('cleaning&household');
});


Route::get('/pickles&condiments', function () {
    return view('pickles&condiments');
});

Route::get('/organicRoots', function () {
    return view('organicRoots');
});

Route::get('/beauty&care', function () {
    return view('beauty&care');
});

Route::get('/gift', function () {
    return view('gift');
});

Route::get('/vegetables', function () {
    return view('vegetables');
});

Route::get('/meet_theMakers', function () {
    return view('meet_theMakers');
});

Route::get('/fromTheSource', function () {
    return view('fromTheSource');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/ethniPromise', function () {
    return view('ethniPromise');
});


Route::get('/stories', function () {
    return view('stories');
});

Route::get('/accounts/account', function () {
    return view('accounts.account');
});

// login 
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected route example
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');





// sellers route
use App\Http\Controllers\SellerAuthController;
use App\Http\Controllers\Seller\ProductController;

Route::prefix('seller')->name('seller.')->group(function () {
    
    // Public routes (open to anyone)
    Route::get('/register', [SellerAuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [SellerAuthController::class, 'register']);

    Route::get('/login', [SellerAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [SellerAuthController::class, 'login']);

    // Protected seller-only routes
    Route::middleware('auth:seller')->group(function () {
        Route::get('/dashboard', function () {
            return view('seller.dashboard');
        })->name('dashboard');

        Route::post('/logout', [SellerAuthController::class, 'logout'])->name('logout');

        // Future: seller product management
        Route::get('/products', [ProductController::class, 'index'])->name('products.index');
        Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    });
});


// admin 
use App\Http\Controllers\AdminAuthController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', function () {
            // You can load stats here from database
            return view('admin.dashboard');
        })->name('dashboard');
    });
});


// seller routes
use App\Http\Controllers\SellerController;

// Seller Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/seller/upload', [SellerController::class, 'showUploadForm']);
    Route::post('/seller/upload', [SellerController::class, 'uploadProduct']);
    Route::get('/seller/products', [SellerController::class, 'myProducts']);
});

//upload product
Route::middleware(['auth:seller'])->group(function () {
    Route::get('/seller/upload-product', [ProductController::class, 'create'])->name('seller.product.create');
    Route::post('/seller/upload-product', [ProductController::class, 'store'])->name('seller.product.store');
});

//store product on db
Route::post('/seller/upload-product', [App\Http\Controllers\Seller\ProductController::class, 'store'])->name('seller.product.store');

//display on homepage