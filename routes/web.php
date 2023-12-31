<?php


use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('PrimevueDashboard');
});

Route::get('/table', function () {
    return Inertia::render('PrimevueTable');
});

Route::get('/media', function () {
    return Inertia::render('PrimevueMedia');
});

Route::get('/chart', function () {
    return Inertia::render('PrimevueChart');
});



require __DIR__.'/auth.php';
