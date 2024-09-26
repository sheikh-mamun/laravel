<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware('auth')->group(function () {
//     Route::resource('tickets', TicketController::class)->except(['show']);
//     Route::get('admin/tickets', [TicketController::class, 'adminIndex'])->middleware('admin');
//     Route::post('tickets/{ticket}/respond', [TicketController::class, 'respond'])->name('tickets.respond');
//     Route::post('tickets/{ticket}/close', [TicketController::class, 'close'])->name('tickets.close');
// });


use App\Http\Controllers\TicketController;

Route::get('/', [TicketController::class, 'index'])->name('home');

