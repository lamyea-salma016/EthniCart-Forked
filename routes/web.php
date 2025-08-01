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


// routes of food section

Route::get('/foods', function () {
    return view('foods');
});

Route::get('/A1_foods_fruits', function () {
    return view('A1_foods_fruits');
});

Route::get('/A2_foods_sweets', function () {
    return view('A2_foods_sweets');
});

Route::get('/A3_foods_snacks', function () {
    return view('A3_foods_snacks');
});

Route::get('/A4_foods_dairy', function () {
    return view('A4_foods_dairy');
});

// B Routes of Farm fresh Vegetable
Route::get('/vegetables', function () {
    return view('vegetables');
});


// C. Rotutes of Fish and meat
Route::get('/fish&meat', function () {
    return view('fish&meat');
});
Route::get('/C1_Fish&Meat_fish', function () {
    return view('C1_Fish&Meat_fish');
});
Route::get('/C2_Fish&Meat_Meat', function () {
    return view('C2_Fish&Meat_Meat');
});

// D. routes of homamade masala
Route::get('/homemadeMasala', function () {
    return view('homemadeMasala');
});


// E. Routes of Pickles

Route::get('/pickles&condiments', function () {
    return view('pickles&condiments');
});

// F. routes of home and kitchen
Route::get('/home&kitchen', function () {
    return view('home&kitchen');
});

// G. Routes of Organic routes
Route::get('/organicRoots', function () {
    return view('organicRoots');
});


//H.  Beauty&Care route
Route::get('/beauty&care', function () {
    return view('beauty&care');
});
Route::get('/F1_Beauty&Care_SkinCare', function () {
    return view('F1_Beauty&Care_SkinCare');
});
Route::get('/F1_Beauty&Care_SkinCare', function () {
    return view('F2_Beauty&Care_HairCare');
});

//I. Clothing&Apparels routes
Route::get('/Clothing&Apparels', function () {
    return view('Clothing&Apparels');
});

Route::get('/I1_Clothings_WomenWear', function () {
    return view('I1_Clothings_WomenWear');
});

Route::get('/I2_Clothings_MenWear', function () {
    return view('I1_Clothings_MenWear');
});



Route::get('/craftItems', function () {
    return view('craftItems');
});


Route::get('/cleaning&household', function () {
    return view('cleaning&household');
});

Route::get('/gift', function () {
    return view('gift');
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

Route::get('/contactUs', function () {
    return view('contactUs');
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

//seller dashboard
use App\Http\Controllers\Seller\DashboardController;

Route::middleware('auth:seller')->group(function () {
    Route::get('/seller/dashboard', [DashboardController::class, 'index'])->name('seller.dashboard');
});

// show products on specific page
Route::get('/vegetables', function () {
    $products = DB::table('products')
        ->where('display_page', 'vegetables')
        ->get();

    return view('vegetables', compact('products'));
});

Route::get('/', function () {
    $products = DB::table('products')
        ->where('display_page', 'home') // ⬅️ only show homepage-tagged products
        ->get();

    return view('home', compact('products'));
});
