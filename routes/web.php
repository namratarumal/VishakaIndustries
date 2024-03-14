<?php

use App\Http\Middleware\loginMiddleware;
use App\Http\Controllers\backendController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('product', productController::class)->middleware('adminLoginCheck');
Route::resource('category', categoryController::class)->middleware('adminLoginCheck');

Route::get('/admin', [backendController::class, 'index'])->middleware('adminLoginCheck');
Route::get('/login', [backendController::class, 'login']);
Route::post('/login', [backendController::class, 'loginPost']);
Route::get('/logout', [backendController::class, 'logout']);

Route::get('/contactus', [backendController::class, 'contact'])->middleware('adminLoginCheck');
Route::get('deletecontact/{id}', [backendController::class, 'deletecontact'])->name('deletecontact')->middleware('adminLoginCheck');

Route::get('/feedbacks', [backendController::class, 'feedback'])->middleware('adminLoginCheck');
Route::get('deletefeedback/{id}', [backendController::class, 'deletefeedback'])->name('deletefeedback')->middleware('adminLoginCheck');

Route::get('/enquiries', [backendController::class, 'enquiry'])->middleware('adminLoginCheck');
Route::get('deleteenquiry/{id}', [backendController::class, 'deleteenquiry'])->name('deleteenquiry')->middleware('adminLoginCheck');

// Route::get('/enquiries', [backendController::class, 'enquiry']);
// Route::get('/feedbacks', [backendController::class, 'feedback']);
// Route::get('/products', [dashboardController::class, 'products']);

Route::get('/', [frontendController::class, 'home']);
Route::get('/aboutus', [frontendController::class, 'aboutus']);
Route::get('/contact', [frontendController::class, 'contact']);
Route::post('/contact', [frontendController::class, 'contactPost']);
Route::get('/gallary', [frontendController::class, 'gallary']);
Route::get('/enquiry', [frontendController::class, 'enquiry']);
Route::post('/enquiry', [frontendController::class, 'enquiryPost']);
Route::get('/feedback', [frontendController::class, 'feedback']);
Route::post('/feedback', [frontendController::class, 'feedbackPost']);
Route::get('products/{id}', [frontendController::class, 'product'])->name('products');
Route::get('categories/{id}', [frontendController::class, 'categories']);

Route::get('dada', [frontendController::class, 'demo']);
