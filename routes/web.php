<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\ArticleListingsController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/articles/search', SearchController::class);

// Backend routes to dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware(['auth', 'verified']);

Route::get('/articles', [ArticleListingsController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleListingsController::class, 'show'])->name('articles.detail');
Route::post('/articles', [ArticleListingsController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('/add-article',[ArticleListingsController::class, 'create'])->name('articles.create')->middleware(['auth', 'verified']);

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/services', [PagesController::class, 'services'])->name('pages.services');
Route::get('/podcasts', [PagesController::class, 'podcasts'])->name('pages.podcasts');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');


Route::resource('articles',ArticleListingsController::class)
	->only(['update', 'edit', 'destroy'])
	->middleware(['auth', 'verified']);


// Category routes
Route::get('/categories/{category:slug}', function(Category $category) {
	// Paginate the articles associated with the category
	$articles = $category->articles()->paginate(1);

	return view('articles.index', [
		 'articles' => $articles,
		 'title' => $category->name,
		 'categories' => Category::all(),
	]);
});

// CRUD on Category
Route::resource('admin/category', CategoryController::class)
	->only(['index', 'store', 'edit', 'update', 'destroy'])
	->middleware(['auth', 'verified']);

// Reviews
// Route::post('/reviews', [ReviewController::class, 'store'])->middleware(['auth', 'verified']);
Route::resource('reviews', ReviewController::class)
	->only(['index','store','edit','update','destroy',])
	->middleware(['auth', 'verified']);

// Admin routes
Route::get('/admin', [AdminPanelController::class, 'index'])->name('layouts.admin');


require __DIR__.'/auth.php';
