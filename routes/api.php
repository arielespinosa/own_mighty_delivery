<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppSettingController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DeliveryManDocumentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentGatewayController;
use App\Http\Controllers\StaticDataController;


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

// Route::resource('user', UserController::class);

// Supplementing Resource Controllers
Route::get('/country/developed', [CountryController::class, 'developed'])->name('country.developed');
//Route::get('/order/{id}/history', [OrderHistoryController::class]);

Route::apiResource('country.cities', CityController::class)->except([
    'show', 'create', 'store', 'update', 'destroy'
]);
Route::apiResource('order.history', OrderHistoryController::class);

Route::apiResources([
    'country' => CountryController::class,
    'city' => CityController::class,
    'app_setting' => AppSettingController::class,
    'delivery_man_doc' => DeliveryManDocumentController::class,
    'notification' => NotificationController::class,
    'order' => OrderController::class,
    'payment' => PaymentController::class,
    'payment_gateway' => PaymentGatewayController::class,
    'static_data' => StaticDataController::class

]);



