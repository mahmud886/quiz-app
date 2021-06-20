<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;




Route::get('/', function () {
    return view('admin.index');
});



    Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('home');


    Route::resource('quiz', QuizController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('user', UserController::class);

    Route::get('/quiz/{id}/questions',[QuizController::class,'question'])->name('quiz.question');

    Route::get('exam/assign', [ExamController::class,'create'])->name('exam.assign');


