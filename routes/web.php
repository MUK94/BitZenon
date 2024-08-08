<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\ArticleListingsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TopicController;
use App\Models\Category;
use App\Models\Topic;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/articles/search', SearchController::class);

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/services', [PagesController::class, 'services'])->name('pages.services');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/articles', [ArticleListingsController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleListingsController::class, 'show'])->name('articles.detail');

// -------- @Admin ---------
// -------- @Articles ------
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware(['auth', 'verified']);
Route::get('/add-article', [ArticleListingsController::class, 'create'])->name('articles.create')->middleware(['auth', 'verified']);
Route::resource('articles', ArticleListingsController::class)
    ->only(['update', 'edit', 'destroy'])
    ->middleware(['auth', 'verified']);

// --------@Podcasts -----------
Route::get('/podcasts', [PodcastController::class, 'index'])->name('podcasts.index');
Route::resource('podcasts', PodcastController::class)->only(['store', 'update', 'edit', 'destroy'])->middleware(['auth', 'verified']);

// -------@Podcasts Topics ------
Route::resource('admin/topic', TopicController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

// Podcast Topics routes
Route::get('/podcasts/{topic:slug}', function (Topic $topics) {
    // Paginate the podcasts associated with the Topic
    $podcasts = $topics->podcasts()->paginate(1);

    return view('podcasts.index', [
        'podcasts' => $podcasts,
        'title' => $topics->title,
        'topics' => Topic::all(),
    ]);
});

// Category routes
Route::get('/categories/{category:slug}', function (Category $category) {
    // Paginate the articles associated with the category
    $articles = $category->articles()->paginate(10);

    return view('articles.index', [
        'articles' => $articles,
        'title' => $category->name,
        'categories' => Category::all(),
        'topics' => Topic::all(),
    ]);
});

// CRUD on Category
Route::resource('admin/category', CategoryController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

// Reviews
// Route::post('/reviews', [CommentController::class, 'store'])->middleware(['auth', 'verified']);
Route::resource('reviews', CommentController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

// Admin routes
Route::get('/admin', [AdminPanelController::class, 'index'])->name('layouts.admin');

require __DIR__ . '/auth.php';
