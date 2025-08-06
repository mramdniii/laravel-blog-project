<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'mramdani', 'title' => 'About Me']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog GO', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(10)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');

    return view('posts', ['title' => Count($user->posts) . ' Article by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');

    return view('posts', ['title' => 'Category: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/data', [PostController::class, 'create']);
Route::post('/data', [PostController::class, 'store']);