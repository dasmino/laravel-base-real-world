<?php

use Illuminate\Support\Facades\Route;
use App\Services\SomeService;
use App\Services\SomeServiceFacade;
use App\Http\Controllers\PostController;
use App\Events\PodcastProcessed;

// Route::get('/', function () {
//     // $sv = new SomeService;
//     // dd(SomeServiceFacade::doSomething());
//     // dd(app('SomeService')::doSomething());
//     // return $this->app('SomeService');

//     dd(app());


// });

Route::get('post/{post}', [PostController::class, 'index']);


Route::get('/test', function () {
    $data = [
        'name' => 'long vu',
        'old' => 27
    ];

    return $data;
    // event(new PodcastProcessed($data));
});

