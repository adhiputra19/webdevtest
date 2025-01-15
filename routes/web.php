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

Route::get('/createpage', [ProjectController::class, 'create'])->name('bill.create'); // Updated route for creating a bill

Route::post('/test', [ProjectController::class, 'store'])->name('bill.store'); // Updated route for creating a bill

Route::get('/{id}/edit', [ProjectController::class, 'edit'])->name('bill.edit'); // Updated route for editing a bill

Route::put('/{id}', [ProjectController::class, 'update'])->name(name: 'bill.update'); // Updated route for updating a bill

Route::get('/welcome', function () {
    return view('welcome', [
        "pagetitle" => "Welcome to Project Manager"
    ]);
});

Route::delete('/delete', [ProjectController::class, 'destroy'])->name(name: 'bill.destroy'); // Updated route for updating a bill
