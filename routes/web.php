<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Satu",
            "slug" => "judul-satu",
            "author" => "Rivaldi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod exercitationem maiores recusandae omnis voluptas eveniet odio quibusdam laboriosam voluptates consectetur."
        ],
        [
            "title" => "Judul Dua",
            "slug" => "judul-dua",
            "author" => "Satria",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora laborum hic voluptates sunt temporibus. Eaque ullam hic ad."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Satu",
            "slug" => "judul-satu",
            "author" => "Rivaldi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod exercitationem maiores recusandae omnis voluptas eveniet odio quibusdam laboriosam voluptates consectetur."
        ],
        [
            "title" => "Judul Dua",
            "slug" => "judul-dua",
            "author" => "Satria",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora laborum hic voluptates sunt temporibus. Eaque ullam hic ad."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
