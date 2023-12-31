<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Default_CategoryController;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts', 'posts')->name('timeline');
    Route::get('/posts/create', 'create')->name('create');
    Route::get('/posts/{post}', 'show')->name('show');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
});

Route::controller(RecordController::class)->middleware(['auth'])->group(function(){
    Route::get('/books/mypage', 'mypage')->name('mypage');
    Route::put('/books/mypage/{record}', 'update')->name('update');
    // Route::get('/books/{record}/goal', 'goal')->name('goal');
    Route::get('/books/mypage/{record}/goal', 'goal')->name('goal');
});
// mypageのRoute宣言はBookControllerの前で行う


Route::controller(Default_CategoryController::class)->middleware(['auth'])->group(function(){
    Route::get('/books/{book}/edit', 'edit')->name('edit');
    Route::get('/books/default_categories/{default_category}', 'bookshelves');
});

Route::controller(BookController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/books/bookshelves', 'bookshelves')->name('bookshelves');
    Route::get('/books', 'store')->name('store');
    Route::get('/books/add', 'addbooks')->name('addbooks');
    
    // Route::get('/books/{book}/edit')->name('edit');
    // Route::put('/books/{book}')->name('update'); 
    Route::get('/books/{book}', 'bookdetail')->name('bookdetail');
    Route::put('/books/{book}', 'update')->name('update');
    Route::get('/books/{book}/edit', 'edit')->name('edit');
});

Route::controller(CategoryController::class)->middleware(['auth'])->group(function(){
    Route::get('/books/add', 'addbooks')->name('addbooks'); 
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



/*Route::get('/posts', [PostController::class, 'posts']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/top', [BookController::class, 'index']);
Route::get('/bookshelves', [BookController::class, 'bookshelves']);
Route::get('/mypage', [RecordController::class, 'mypage']);
Route::get('/books/add', [BookController::class, 'addbooks']);
Route::get('/books', [BookController::class, 'store']);

Route::get('/', [PostController::class, 'index'])->name('index');
Route

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', [PostController::class, 'index']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/create', [PostController::class, 'create']);
    Route::get('/posts/{post}', [PostController::class, 'show']);
});

/*Route::get('/', function() {
    return view('posts.index');
});*/

require __DIR__.'/auth.php';
