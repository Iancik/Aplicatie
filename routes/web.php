<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Salut lume!';
});
Route::get('/home', function () {
    $name = "Constantin";
    $groups = ['w-2142', 'w-2143', 'w-2144', 'w-2145'];
    return view('home',['name'=> $name, 'groups' => $groups]);
});
Route::get('about', function () {
    return view('about');
});
Route::get('products', function () {
    return view('products');
});
Route::get('services', function () {
    return view('services');
});

