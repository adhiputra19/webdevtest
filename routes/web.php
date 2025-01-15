<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


Route::get('/', function () {
    return view('loginregister', [
        "pagetitle" => "Welcome to Project Manager"
    ]);
});

Route::get('/projectlist', [ProjectController::class, 'index'])->name('bill.index');

Route::get('/bill/{id}', [ProjectController::class, 'show'])->name('bill.show'); // Route for bill details

Route::get('/bill/createpage', [ProjectController::class, 'createpage'])->name('bill.create'); // Updated route for creating a bill

Route::get('/bill/{id}/edit', [ProjectController::class, 'edit'])->name('bill.edit'); // Updated route for editing a bill
