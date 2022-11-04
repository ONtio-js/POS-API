<?php

use App\Http\Controllers\V1\AdminstratorController;
use App\Http\Controllers\V1\CustomerController;
use App\Http\Controllers\V1\PaymentController;
use App\Http\Controllers\V1\ProductDetailController;
use App\Http\Controllers\V1\PurchaseController;
use App\Http\Controllers\V1\ReceiptController;
use App\Http\Controllers\V1\SaleController;
use App\Http\Controllers\V1\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('v1')
->group(function(){
    Route::apiResource('/customer',CustomerController::class);
    Route::apiResource('/adminstrator',AdminstratorController::class);
    Route::apiResource('/purchase',PurchaseController::class);
    Route::apiResource('/sales',SaleController::class);
    Route::apiResource('/receipts',ReceiptController::class);
    Route::apiResource('/payment',PaymentController::class);
    Route::apiResource('products',ProductDetailController::class);
    Route::apiResource('/transaction',TransactionController::class);
});
