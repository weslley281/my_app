<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home', ['title' => 'Olá Mundo']);

Route::get('/users/{id}', function ($id) {
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


Route::get('/users', function () {
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
})->name("usuarios");

Route::post('/users', function () {
    return "Olá mundo";
});

Route::delete('/users', function () {
    return "Olá mundo";
});

Route::get('rota-a', function () {
    return redirect("users");
});
