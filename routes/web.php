<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypeController;
use App\Models\Comments;
use App\Models\News;
use App\Models\Offers;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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
// Route::get('/shop', function () {
//     return view('shop',
//                   ['products'=>Product::all(),
//                 ]);
// });
Route::get('/about', function () {
    return view('about');
});
Route::get('/offers', function () {
    return view('offers',[
        'offers' => Offers::all()
    ]);
});Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shop-details', function () {
    return view('shop-details');
});
//Route::get('/shopping-cart', function () {
//    return view('shopping-cart');
//});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::resource('cart',CartController::class);
Route::resource('comment',CommentController::class);
Route::resource('note',NoteController::class);
//Route::post('/cart', [ProductController::class, 'addToCart'])->name('cart');
//Route::get('/cart', [ProductController::class, 'showCart'])->name('cart.show');
Route::get('/newss', function () {
    $news = News::orderBy('created_at', 'desc')->get();
    $comment = Comments::orderBy('created_at', 'desc')->get();
    return view('news.index', [
        'newss' => $news,
        'comments'=>$comment
    ]);
});

Route::get('/a', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::middleware('auth')->group(function () {
    // Route::get('/createuser', function () {
    //     return view('createuser');
    // });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth','is_admin'])->group(function () {
    Route::resource('category',CategoryController::class);
    Route::resource('product',ProductController::class);
    Route::resource('type',TypeController::class);
    Route::resource('offer',OfferController::class);
    Route::resource('news',NewsController::class);
    Route::resource('customer',CustomerController::class);
//    Route::resource('comment',CommentController::class);
});

require __DIR__ . '/auth.php';
