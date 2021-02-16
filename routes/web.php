<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/employee', function () {
    return view('livewire.test');
})->name('employee');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/award', function () {
    return view('award');
})->name('award');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/announcement', function () {
    return view('announcement');
})->name('announcement');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/branch', function () {
    return view('branch');
})->name('branch');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/department', function () {
    return view('department');
})->name('department');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/designation', function () {
    return view('designation');
})->name('designation');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/allowance-type', function () {
    return view('allowance-type');
})->name('allowance-type');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/allowance-type', function () {
    return view('allowance-type');
})->name('allowance-type');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/training-type', function () {
    return view('training-type');
})->name('training-type');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/leave-type', function () {
    return view('leave-type');
})->name('leave-type');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/document-type', function () {
    return view('document-type');
})->name('document-type');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/meeting-type', function () {
    return view('meeting-type');
})->name('meeting-type');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/paysheet-type', function () {
    return view('paysheet-type');
})->name('paysheet-type');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/company-policy', function () {
    return view('company-policy');
})->name('company-policy');
