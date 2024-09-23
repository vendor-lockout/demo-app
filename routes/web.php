<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app')
        ->with([
            'posts' => Post::query()
                ->inRandomOrder()
                ->get(['title', 'content', 'created_at']),
        ])
        ->fragmentIf(
            request()->hasHeader('HX-Request'),
            request()->header('HX-Target')
        );
});
