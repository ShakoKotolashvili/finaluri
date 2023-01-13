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
});

//register

Route::get('/register', [AuthController::class, "registerPage"])->name("register");
Route::post('/register', [AuthController::class, "register"]);

//login

Route::get('/login', [AuthController::class, "loginPage"])->name("login");
Route::post('/login', [AuthController::class, "login"]);

//logout

Route::middleware("auth")->get('/logout', [AuthController::class, "logout"])->name("logout");

Route::middleware(['auth'])->group(function () {
    Route::get("/user", [UserController::class, "index"])->name("user.index");
    
    Route::get('/quiz', [QuizController::class, 'wholeQuiz'])->name("quiz.list");

    Route::get('/quiz/create', [QuizController::class, 'makeQuiz'])->name('quiz.create');
    Route::post('/quiz', [QuizController::class, 'saveQuiz'])->name('quiz.store');

    Route::post('/quiz/create', [QuizController::class, 'makeQuiz'])->name('quiz.create');
    Route::get('/quiz/{id}', [QuizController::class, 'showQuiz'])->name('quiz.view');
    Route::get('/quiz/{quiz}/update', [QuizController::class, 'updateQuiz'])->name('quiz.update');
    Route::get('quiz/delete/{quiz}', [PostController::class, "delete"])->name("quiz.delete");
}); 