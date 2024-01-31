<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);



Route::get('addUserForm', [UserController::class, 'create'])->name('addUserForm');
Route::post('storeUser', [UserController::class, 'store'])->name('storeUser');
Route::get('userList', [UserController::class, 'index'])->name('userList');

Route::get('addCar', [CarController::class, 'create'])->name('addCar');
Route::post('storeCar', [CarController::class, 'store'])->name('storeCar');
Route::get('carList', [CarController::class, 'index'])->name('carList');
Route::get('editCar/{id}', [CarController::class, 'edit'])->name('editCar');
Route::put('updateCar/{id}', [CarController::class, 'update'])->name('updateCar');
Route::get('deleteCar/{id}', [CarController::class, 'destroy'])->name('deleteCar');


Route::get('addCategory', [CategoryController::class, 'create'])->name('addCategory');
Route::post('storeCategory', [CategoryController::class, 'store'])->name('storeCategory');
Route::get('categoryList', [CategoryController::class, 'index'])->name('categoryList');
Route::get('editCategory/{id}', [CategoryController::class, 'edit'])->name('editCategory');
Route::put('updateCategory/{id}', [CategoryController::class, 'update'])->name('updateCategory');
Route::get('deleteCategory/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory');


Route::get('addTestimonial', [TestimonialController::class, 'create'])->name('addTestimonial');
Route::post('storeTestimonial', [TestimonialController::class, 'store'])->name('storeTestimonial');
Route::get('testimonialList', [TestimonialController::class, 'index'])->name('testimonialList');
Route::get('editTestimonial/{id}', [TestimonialController::class, 'edit'])->name('editTestimonial');
Route::put('updateTestimonial/{id}', [TestimonialController::class, 'update'])->name('updateTestimonial');
Route::get('deleteTestimonial/{id}', [TestimonialController::class, 'destroy'])->name('deleteTestimonial');


Route::get('addMessage', [MessageController::class, 'create'])->name('addMessage');
Route::post('storeMessage', [MessageController::class, 'store'])->name('storeMessage');
Route::get('messageList', [MessageController::class, 'index'])->name('messageList');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
