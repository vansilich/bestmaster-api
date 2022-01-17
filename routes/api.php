<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CouponController;
use App\Http\Controllers\Api\ServicesController;
use App\Http\Controllers\Api\PromotionsController;
use App\Http\Controllers\Api\CertificatesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/services/index-page', [ServicesController::class, 'indexPageServices']);
Route::get('/services/all', [ServicesController::class, 'allServices']);

Route::get('/promotions/all', [PromotionsController::class, 'allPromotions']);
Route::post('/promotions/purchase', [PromotionsController::class, 'purchasePromotion']);

Route::get('/certificates/all', [CertificatesController::class, 'allCertificates']);
Route::post('/certificates/purchase', [CertificatesController::class, 'purchaseCertificate']);
Route::post('/certificates/purchase/in-paper', [CertificatesController::class, 'purchasePaperCertificate']);
