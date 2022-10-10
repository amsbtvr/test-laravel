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
        "name" => "A",
        "email" => "b",
        "title" => "About"
    ]);
});



Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Kyo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt odit, magnam recusandae distinctio sapiente velit tempora hic dolore facilis fugit minus ipsum, consequuntur porro expedita dignissimos voluptatum ex soluta sequi?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Iwe",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt odit, magnam recusandae distinctio sapiente velit tempora hic dolore facilis fugit minus ipsum, consequuntur porro expedita dignissimos voluptatum ex soluta sequi?"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Kyo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt odit, magnam recusandae distinctio sapiente velit tempora hic dolore facilis fugit minus ipsum, consequuntur porro expedita dignissimos voluptatum ex soluta sequi?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Iwe",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt odit, magnam recusandae distinctio sapiente velit tempora hic dolore facilis fugit minus ipsum, consequuntur porro expedita dignissimos voluptatum ex soluta sequi?"
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view ('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
