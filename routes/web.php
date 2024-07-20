<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home', ['title' => 'Olá Mundo']);

Route::prefix('users')->group(function () {
    Route::get('{id}', function ($id) {
        $users = [
            [
                "name" => "Fulano",
                "age" => 31,
                "weigth" => "81.54",
                "is_admin" => true,
                "address" => [
                    "address_line1" => "Rua Sei lá, casa 32",
                    "address_line2" => "Quadra 12",
                    "city" => "Cuaibá",
                ]
            ],
            [
                "name" => "Cicrano",
                "age" => 27,
                "weigth" => "72.64",
                "is_admin" => false,
                "address" => [
                    "address_line1" => "Rua Sei lá, casa 32",
                    "address_line2" => "Quadra 12",
                    "city" => "Cuaibá",
                ]
            ]
        ];

        return $users[$id];
    })->whereNumber('id');


    Route::get('', function () {
        return [
            [
                "name" => "Fulano",
                "age" => 31,
                "weigth" => "81.54",
                "is_admin" => true,
                "address" => [
                    "address_line1" => "Rua Sei lá, casa 32",
                    "address_line2" => "Quadra 12",
                    "city" => "Cuaibá",
                ]
            ],
            [
                "name" => "Cicrano",
                "age" => 27,
                "weigth" => "72.64",
                "is_admin" => false,
                "address" => [
                    "address_line1" => "Rua Sei lá, casa 32",
                    "address_line2" => "Quadra 12",
                    "city" => "Cuaibá",
                ]
            ]
        ];
    });

    Route::post('', function () {
        return "Olá mundo";
    });

    Route::delete('{id}', function () {
        return "Olá mundo";
    });
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
