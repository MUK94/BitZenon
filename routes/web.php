<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\ArticleListingsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Models\Category;
use App\Models\Article;
use App\Models\topic;
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

Route::get('/articles/search', SearchController::class);

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/services', [PagesController::class, 'services'])->name('pages.services');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
// Route::get('/podcasts', [PodcastController::class, 'index'])->name('podcasts.index');
Route::get('/blog', [ArticleListingsController::class, 'index'])->name('articles.index');
Route::get('/blog/{slug}', [ArticleListingsController::class, 'show'])->name('articles.detail');

// Category routes
Route::get('/categories/{category:slug}', function (Category $category) {
    // Paginate the articles associated with the category
    $articles = $category->articles()->paginate(10);
    $latestArticles = $category->articles()->paginate(10);
	 $popularPosts =  Article::orderBy('view_count', 'desc')->take(6)->get();
	 $popularArticles = $popularPosts->diff($latestArticles->take(3));

    return view('articles.index', [
        'articles' => $articles,
        'title' => $category->name,
        'categories' => Category::all(),
		  'latestArticles'=> $latestArticles,
		  'popularPosts'=> $popularArticles,
		  'popularArticles'=> $popularArticles,
        'topics' => Topic::all(),
    ]);
});
// Podcast Topics routes
// Route::get('/podcasts/{topic:slug}', function (Topic $topics) {
//      // Paginate the podcasts associated with the Topic
//      $podcasts = $topics->podcasts()->paginate(1);

//      return view('podcasts.index', [
//          'podcasts' => $podcasts,
//          'title' => $topics->title,
//          'topics' => Topic::all(),
//         ]);
//     });

// //////////-------- @Admin ---------////////////
Route::middleware('auth')->group(function () {
    // Routes accessible to all logged-in users
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');

    // Routes accessible only to users with the 'admin' role
    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        // Articles
        Route::get('/admin/articles/', [AdminPanelController::class, 'articles'])->name('admin.articles.index');
        Route::resource('admin/articles', ArticleListingsController::class)->only(['store', 'update', 'edit', 'destroy']);
        // Categories
        Route::resource('admin/categories', CategoryController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);

        // Hero section
        Route::get('/admin/hero-section/', [AdminPanelController::class, 'hero-section'])->name('admin.home.index');
        Route::resource('admin/hero-section', HeroSectionController::class);

        // About Section
        Route::get('/admin/about-section/', [AdminPanelController::class, 'about'])->name('admin.about.index');
        Route::resource('admin/about-section', AboutSectionController::class);

        // Services
        Route::resource('admin/services', ServiceController::class);

        // Reviews
        Route::resource('reviews', CommentController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);

        // Testimonials
        Route::resource('admin/testimonials', TestimonialController::class);
        Route::get('/admin/comments/', [AdminPanelController::class, 'comments'])->name('admin.comments.index');
    });
});
require __DIR__ . '/auth.php';
