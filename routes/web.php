<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ParticipantController;

Route::get('/', [EventController::class, 'index'])->name('home');

Route::get('/register', [RegistrationController::class, 'create'])->name('register.create');
Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');

Route::get('/participants', [ParticipantController::class, 'index'])->name('participants.index');
Route::delete('/participants/{participant}', [ParticipantController::class, 'destroy'])->name('participants.destroy');
Route::get('/participants/export/pdf', [ParticipantController::class, 'exportPdf'])->name('participants.export.pdf');
