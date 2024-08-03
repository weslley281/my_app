<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home', ['title' => 'Olá Mundo']);

Route::get('/user/{user}', function (User $user) {
    dd($user);
});

Route::prefix('products')->middleware('auth')->group(function () {
    Route::get('', function () {
        return [
            [
                "id" => 1,
                "name" => "chuca maluca",
                "price" => 39.90
            ], [
                "id" => 2,
                "name" => "supositório banana",
                "price" => 49.90
            ], [
                "id" => 3,
                "name" => "anel peniano vira olho",
                "price" => 29.90
            ],
        ];
    });
});


Route::get('rota-a', function () {
    return redirect("users");
});

//Injeção de Dependencias
Route::post('/dependencia', function (Request $request) {
    dd($request);
});
