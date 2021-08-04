<?php

use Illuminate\Support\Facades\Route;
use Medine\Apps\ChallengeOne\Backend\Controller\InvoiceTotalController;
use Medine\Apps\ChallengeOne\Backend\Controller\InvoiceProductsGreaterThan100Controller;
use Medine\Apps\ChallengeOne\Backend\Controller\InvoiceProductsNameController;

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

Route::get('/invoices/{id}/total', InvoiceTotalController::class);

Route::get('invoices', InvoiceProductsGreaterThan100Controller::class);

Route::get('invoices_products', InvoiceProductsNameController::class);
