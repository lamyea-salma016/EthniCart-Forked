<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;


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
// Route::get('/', function() {
//     return view('home');
// })->name('home');




// Route::get('/', function () {
//     $products = DB::table('products')->get()->toArray();
//     return view('home', compact('products'));
// })->name('home');
// Route::get('/home', function () {
//     return view('home');
// })->name('home');

// Route::get('/', function () {
//     $products = DB::table('products')
//         ->where('display_page', 'home') 
//         ->get();

//     return view('home', compact('products'));
// });

// Route::get('/', function () {
//     $products = DB::table('products')
//         ->where('display_page', 'home')
//         ->get();

//     return view('home', compact('products'));
// })->name('home'); // ✅ keep the route name!
Route::get('/home', function () {
    $products = DB::table('products')
        ->where('display_page', 'home')
        ->get();

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


Route::get('/ecoFriendlyProducts', function () {
    return view('ecoFriendlyProducts');
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

Route::get('/join_as_seller', function () {
    return view('join_as_seller');
});
Route::get('/privacy_policy', function () {
    return view('privacy_policy');
});
Route::get('/terms_of_service', function () {
    return view('terms_of_service');
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
Route::get('/', function () {
    $products = DB::table('products')
        ->where('display_page', 'home') 
        ->get();

    return view('home', compact('products'));
});

Route::get('/vegetables', function () {
    $products = DB::table('products')
        ->where('display_page', 'vegetables')
        ->get();

    return view('vegetables', compact('products'));
});



Route::get('/foods', function () {
    $products = Product::where('display_page', 'foods')->get();
    return view('foods', compact('products'));
});

Route::get('/A1_foods_fruits', function () {
    $products = Product::where('display_page', 'A1_foods_fruits')->get();
    return view('A1_foods_fruits', compact('products'));
});

Route::get('/A2_foods_sweets', function () {
    $products = Product::where('display_page', 'A2_foods_sweets')->get();
    return view('A2_foods_sweets', compact('products'));
});

Route::get('/A3_foods_snacks', function () {
    $products = Product::where('display_page', 'A3_foods_snacks')->get();
    return view('A3_foods_snacks', compact('products'));
});

Route::get('/A4_foods_dairy', function () {
    $products = Product::where('display_page', 'A4_foods_dairy')->get();
    return view('A4_foods_dairy', compact('products'));
});

Route::get('/fish&meat', function () {
    $products = Product::where('display_page', 'fish&meat')->get();
    return view('fish&meat', compact('products'));
});

Route::get('/C1_Fish&Meat_fish', function () {
    $products = Product::where('display_page', 'C1_Fish&Meat_fish')->get();
    return view('C1_Fish&Meat_fish', compact('products'));
});
Route::get('/C2_Fish&Meat_Meat', function () {
    $products = Product::where('display_page', 'C2_Fish&Meat_Meat')->get();
    return view('C2_Fish&Meat_Meat', compact('products'));
});

Route::get('/homemadeMasala', function () {
    $products = Product::where('display_page', 'homemadeMasala')->get();
    return view('homemadeMasala', compact('products'));
});

Route::get('/pickles&condiments', function () {
    $products = Product::where('display_page', 'pickles&condiments')->get();
    return view('pickles&condiments', compact('products'));
});
Route::get('/home&kitchen', function () {
    $products = Product::where('display_page', 'home&kitchen')->get();
    return view('home&kitchen', compact('products'));
});

Route::get('/organicRoots', function () {
    $products = Product::where('display_page', 'organicRoots')->get();
    return view('organicRoots', compact('products'));
});

Route::get('/beauty&care', function () {
    $products = Product::where('display_page', 'beauty&care')->get();
    return view('beauty&care', compact('products'));
});


Route::get('/F1_Beauty&Care_SkinCare', function () {
    $products = Product::where('display_page', 'F1_Beauty&Care_SkinCare')->get();
    return view('F1_Beauty&Care_SkinCare', compact('products'));
});
Route::get('/F2_Beauty&Care_HairCare', function () {
    $products = Product::where('display_page', 'F2_Beauty&Care_HairCare')->get();
    return view('F2_Beauty&Care_HairCare', compact('products'));
});


Route::get('/Clothing&Apparels', function () {
    $products = Product::where('display_page', 'Clothing&Apparels')->get();
    return view('Clothing&Apparels', compact('products'));
});
Route::get('/craftItems', function () {
    $products = Product::where('display_page', 'craftItems')->get();
    return view('craftItems', compact('products'));
});
Route::get('/gift', function () {
    $products = Product::where('display_page', 'gift')->get();
    return view('gift', compact('products'));
});

Route::get('/ecoFriendlyProducts', function () {
    $products = Product::where('display_page', 'ecoFriendlyProducts')->get();
    return view('ecoFriendlyProducts', compact('products'));
});

Route::get('/I1_Clothings_WomenWear', function () {
    $products = Product::where('display_page', 'I1_Clothings_WomenWear')->get();
    return view('I1_Clothings_WomenWear', compact('products'));
});

Route::get('/I2_Clothings_MenWear', function () {
    $products = Product::where('display_page', 'I2_Clothings_MenWear')->get();
    return view('I2_Clothings_MenWear', compact('products'));
});




// product cart routes 
use App\Http\Controllers\CartController;

Route::middleware('auth')->group(function () {
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
});



Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
});



// admin dashboard
use App\Http\Controllers\Admin\AdminDashboardController;

Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::delete('/delete-user/{id}', [AdminDashboardController::class, 'deleteUser'])->name('admin.deleteUser');
    Route::delete('/delete-seller/{id}', [AdminDashboardController::class, 'deleteSeller'])->name('admin.deleteSeller');
});

Route::post('/admin/logout', function () {
    session()->forget('is_admin');
    return redirect('/admin/login');
})->name('admin.logout');


Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::delete('/user/{id}', [AdminDashboardController::class, 'deleteUser'])->name('admin.deleteUser');
    Route::delete('/seller/{id}', [AdminDashboardController::class, 'deleteSeller'])->name('admin.deleteSeller');

    Route::post('/user/block/{id}', [AdminDashboardController::class, 'toggleUserBlock'])->name('admin.toggleUserBlock');
    Route::post('/seller/block/{id}', [AdminDashboardController::class, 'toggleSellerBlock'])->name('admin.toggleSellerBlock');

    Route::get('/seller/profile/{id}', [AdminDashboardController::class, 'showSellerProfile'])->name('admin.sellerProfile');
});



// Block a user
Route::post('/admin/users/{id}/block', [AdminDashboardController::class, 'blockUser'])->name('admin.block.user');

// Unblock a user
Route::post('/admin/users/{id}/unblock', [AdminDashboardController::class, 'unblockUser'])->name('admin.unblock.user');



// seller update
// Add these routes inside the seller middleware group
Route::post('/products/update-stock', [ProductController::class, 'updateStock'])->name('seller.product.updateStock');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('seller.product.destroy');