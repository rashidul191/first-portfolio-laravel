<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\UserController;
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

// Page Main Content Routes
Route::get('/', [HomeController::class, 'page'])->name('home');
Route::get('/contact', [ContactController::class, 'page'])->name('contact');
Route::get('/projects', [ProjectController::class, 'page'])->name('projects');
Route::get('/resume', [ResumeController::class, 'page'])->name('resume');

// Ajax Call Routers
Route::get('/hereData', [HomeController::class, 'hereData']);
Route::get('/aboutData', [HomeController::class, 'aboutData']);
Route::get('/socialData', [HomeController::class, 'socialData']);
Route::get('/projectData', [ProjectController::class, 'projectData']);
Route::get('/resumeLink', [ResumeController::class, 'resumeLink']);
Route::get('/experiencesData', [ResumeController::class, 'experiencesData']);
Route::get('/educationData', [ResumeController::class, 'educationData']);
Route::get('/skillsData', [ResumeController::class, 'skillsData']);
Route::get('/languageData', [ResumeController::class, 'languageData']);
Route::post('/contactRequest', [ContactController::class, 'contactRequest'])->name('contact-from');


Route::delete('/contact/{id}', [ContactController::class, 'deleteContactData'])->name('contact.delete');
Route::get('/contact/{id}', [ContactController::class, 'getContactOneData'])->name('contact.get-one-data');
Route::put('/contact', [ContactController::class, 'putContactDataUpdate'])->name('contact.put-update-data');



Route::resource('contact-res', ContactController::class);

// Route::resource('user', UserController::class);
Route::put('/userRegistration', [UserController::class, 'userRegistration'])->name('userRegistration');
Route::get('/userLogin', [UserController::class, 'userLoginPage'])->name('userLogin');
Route::post('/userLoginCheck', [UserController::class, 'userLoginCheck'])->name('userLoginCheck');



Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
