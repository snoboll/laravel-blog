<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

/**
 * Route for the home page.
 *
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
 */
Route::get('/', function () {
    return view('posts', [
        'posts' =>  Post::latest()->with('category', 'author')->get()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    // Logic to fetch the author details and display the page
    return view('posts', [
        'posts' => $author->posts
    ]);
});
