<?php
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function(){
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post){
     
    // $post = Post::find($id);

    return view('post', ['title' => 'Blog Page', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user){
    return view('posts', ['title' => $user->posts->count() . ' Artikel By '. $user->name, 'posts' => $user->posts]);
});

Route::get('/kategori/{category:slug}', function(Category $category){
    return view('posts', ['title' => 'Kategori '. $category->nama_kategori, 'posts' => $category->posts]);
});

Route::get('/about', function(){
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function(){
    return view('contact', ['title' => 'Contact Page']);
});

