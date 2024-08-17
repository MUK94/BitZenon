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
use App\Http\Controllers\ServiceController;
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


Route::get('/articles/search', SearchController::class);

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/services', [PagesController::class, 'services'])->name('pages.services');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/podcasts', [PodcastController::class, 'index'])->name('podcasts.index');
Route::get('/blog', [ArticleListingsController::class, 'index'])->name('articles.index');
Route::get('/blog/{slug}', [ArticleListingsController::class, 'show'])->name('articles.detail');

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

		// //////////-------- @Admin ---------////////////
Route::middleware('auth')->group(function () {
		Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
		Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
		Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
		Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

		// -------- @Articles ------
		Route::get('/admin/articles/', [AdminPanelController::class, 'articles'])->name('admin.articles.index');
		Route::resource('admin/articles', ArticleListingsController::class)->only(['store','update', 'edit', 'destroy']);

		// --------@Podcasts -----------
		Route::get('/admin/podcasts/', [AdminPanelController::class, 'podcasts'])->name('admin.podcasts.index');
		Route::resource('admin/podcasts', PodcastController::class)->only(['store', 'update', 'edit', 'destroy']);

		// -------@Topics ------
		Route::resource('admin/topics', TopicController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);
		// ------ @CRUD on Category
		Route::resource('admin/categories', CategoryController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);


		// -------@Services---------
		Route::resource('admin/services', ServiceController::class);
		// Reviews
		// Route::post('/reviews', [CommentController::class, 'store']);
		Route::resource('reviews', CommentController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);

		// About
		Route::get('/admin/about-section/', [AdminPanelController::class, 'about'])->name('admin.about.index');

		// Hero section
		Route::get('/admin/about/', [AdminPanelController::class, 'hero-section'])->name('admin.home.index');

		// Testimonials
		Route::get('/admin/testimonials/', [AdminPanelController::class, 'testimonials'])->name('admin.testimonials.index');

		// Testimonials
		Route::get('/admin/comments/', [AdminPanelController::class, 'comments'])->name('admin.comments.index');



});

require __DIR__ . '/auth.php';
