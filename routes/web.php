<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Models\Index;

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



Route::get('addUser', [UserController::class, 'create'])->name('addUser')->middleware('verified');
Route::post('storeUser', [UserController::class, 'store'])->name('storeUser')->middleware('verified');
Route::get('userList', [UserController::class, 'index'])->name('userList')->middleware('verified');
Route::get('editUser/{id}', [UserController::class, 'edit'])->name('editUser')->middleware('verified');
Route::get('updateUser/{id}', [UserController::class, 'update'])->name('updateUser')->middleware('verified');
Route::get('deleteUser/{id}', [UserController::class, 'destroy'])->name('deleteUser')->middleware('verified');



Route::get('addCar', [CarController::class, 'create'])->name('addCar')->middleware('verified');
Route::post('storeCar', [CarController::class, 'store'])->name('storeCar')->middleware('verified');
Route::get('carList', [CarController::class, 'index'])->name('carList')->middleware('verified');
Route::get('editCar/{id}', [CarController::class, 'edit'])->name('editCar')->middleware('verified');
Route::put('updateCar/{id}', [CarController::class, 'update'])->name('updateCar')->middleware('verified');
Route::get('deleteCar/{id}', [CarController::class, 'destroy'])->name('deleteCar')->middleware('verified');


Route::get('addCategory', [CategoryController::class, 'create'])->name('addCategory')->middleware('verified');
Route::post('storeCategory', [CategoryController::class, 'store'])->name('storeCategory')->middleware('verified');
Route::get('categoryList', [CategoryController::class, 'index'])->name('categoryList')->middleware('verified');
Route::get('editCategory/{id}', [CategoryController::class, 'edit'])->name('editCategory')->middleware('verified');
Route::put('updateCategory/{id}', [CategoryController::class, 'update'])->name('updateCategory')->middleware('verified');
Route::get('deleteCategory/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory')->middleware('verified');


Route::get('addTestimonial', [TestimonialController::class, 'create'])->name('addTestimonial')->middleware('verified');
Route::post('storeTestimonial', [TestimonialController::class, 'store'])->name('storeTestimonial')->middleware('verified');
Route::get('testimonialList', [TestimonialController::class, 'index'])->name('testimonialList')->middleware('verified');
Route::get('editTestimonial/{id}', [TestimonialController::class, 'edit'])->name('editTestimonial')->middleware('verified');
Route::put('updateTestimonial/{id}', [TestimonialController::class, 'update'])->name('updateTestimonial')->middleware('verified');
Route::get('deleteTestimonial/{id}', [TestimonialController::class, 'destroy'])->name('deleteTestimonial')->middleware('verified');


Route::get('addMessage', [MessageController::class, 'create'])->name('addMessage');
Route::post('storeMessage', [MessageController::class, 'store'])->name('storeMessage')->middleware('verified');
Route::get('messageList', [MessageController::class, 'index'])->name('messageList')->middleware('verified');
Route::get('showMessage/{id}', [MessageController::class, 'show'])->name('showMessage')->middleware('verified');
Route::get('deleteMessage/{id}', [MessageController::class, 'destroy'])->name('deleteMessage')->middleware('verified');

Route::get('index', [IndexController::class, 'create'])->name('index');
Route::get('single', [IndexController::class, 'index'])->name('single');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
