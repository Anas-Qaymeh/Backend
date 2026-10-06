<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('products', [ProductsController::class, 'stor']);
Route::put('products', [ProductsController::class, 'update']);

Route::get('projects', function () {
    return DB::table('projects')->get();
});

Route::post('projects', function () {
    DB::table('projects')->insert([
        [
            'name' => 'fffffffffwewe',            'description' => "sfffffffffffffffdffs",
      'start_date' => '2004-04-04',
      'end_date' => '2003-03-04',
            'status' => 1
        ],
        [
            'name' => 'ewewe',
            'description' => "sssdffs",          'start_date' => '2004-04-04',
            'end_date' => '2003-03-04',
            'status' => 1
        ],
        [
        'name' => 'ewaaaaae',
            'description' => "ffffffs",
           'start_date' => '2003-03-03',
        'end_date' => '2005-03-03',
        'status' => 1
        ]
    ]);

    return "OK";
});

Route::prefix('tasks')->group(function () {

    Route::get('/', function () {
        return DB::table('tasks')->get();
    });

    Route::post('/', function () {
        DB::table('tasks')->insert([
            [
      'project_id' => 1,
            'details'    => 'fdfdfrr',
        'priorit'    => 'sfffffff',            'due_date'   => '2004-04-04',
            ],
            [
                'project_id' => 1,
                'details'    => 'fdfdfrr',
                'priorit'    => 'sfffffff',
                'due_date'   => '2004-04-04',
            ],
        ]);

        return 'ok';
    });
});



Route::delete('comments/{id}', function ($id) {
      DB::table('comments')->where('id', $id)->delete();


    }

);

Route::prefix('comments')->group(function () {

    Route::get('/', function () {
        return DB::table('comments')->get();
    });

    Route::post('/', function () {
        DB::table('comments')->insert([
            [
        'task_id'      => 5,
     'comment_text' => 'sssdffs',
          'author'       => 'bgbgbbbbbbb',
            ],
            [
        'task_id'      => 5,
               'comment_text' => 'sssdffs',
        'author'       => 'wffwfwf',
            ],
        ]);

        return 'OK';
    });
});

Route::post('books', [BookController::class, 'store']);
Route::get('books/{id}', [BookController::class, 'show']);
Route::get('books', [BookController::class, 'index']);
Route::put('books/{id}', [BookController::class, 'update']);
