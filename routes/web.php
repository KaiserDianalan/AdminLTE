<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\RepositoryController;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('sample');
})->name('sample');

Route::get('search', function () {
    return view('search');
})->name('search');

Route::get('transaction', function () {
    return view('transaction');
})->name('transaction');

Route::get('pin', function () {
    return view('pin');
})->name('pin');


