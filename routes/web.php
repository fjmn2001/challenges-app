<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Medine\Apps\ChallengeFive\Backend\Controller\LogPostController;
use Medine\Apps\ChallengeFive\Backend\Controller\TaskGetController;
use Medine\Apps\ChallengeFive\Backend\Controller\TaskPostController;
use Medine\Apps\ChallengeFive\Backend\Controller\TasksGetController;
use Medine\Apps\ChallengeOne\Backend\Controller\InvoicesIdGetController;
use Medine\Apps\ChallengeOne\Backend\Controller\InvoiceTotalGetController;
use Medine\Apps\ChallengeOne\Backend\Controller\ProductsNameGetController;

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
    return redirect('/home');
});

Auth::routes();

Route::get('invoices/id', InvoicesIdGetController::class);
Route::get('/invoices/{id}/total', InvoiceTotalGetController::class);
Route::get('products/name', ProductsNameGetController::class);


//tasks get
Route::get('/home', TasksGetController::class)->name('home');
Route::get('/tasks/{id}', TaskGetController::class)->name('task');
Route::get('/tasks', [App\Http\Controllers\HomeController::class, 'create'])->name('create');

//tasks
Route::post('tasks', TaskPostController::class)->name('store');
Route::post('tasks/{id}/logs', LogPostController::class)->name('storeLogs');
