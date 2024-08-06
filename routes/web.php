<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel2',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ]
    ]]);

    Route::get('/posts/{id}', function ($id) {
        [
            [
                'id' => 1,
                'title' => 'Judul Artikel',
                'author' => 'John Doe',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel2',
                'author' => 'John Doe',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
            ]
        ];

        $post = Arr::first($posts, function ($post) use ($id) {
        return view('post', ['title' => 'Single Post', 'id' => $id]);
    });
});
