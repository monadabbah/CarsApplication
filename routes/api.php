<?php
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DealershipController;
use App\Http\Controllers\DealershipCarsController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\AuthController;

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

//Route::resource('brands', BrandController::class);
//Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/brands', [BrandController::class, 'index']);
Route::get('/brandscount', [BrandController::class, 'brands_count']);
Route::get('/brands/{id}', [BrandController::class, 'show']);
Route::get('/brands/search/{name}', [BrandController::class, 'search']);

Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/{id}', [CarController::class, 'show']);
Route::get('/cars/search/{name}', [CarController::class, 'search']);

Route::get('/colors', [ColorController::class, 'index']);
Route::get('/colors/{id}', [ColorController::class, 'show']);
Route::get('/colors/search/{name}', [ColorController::class, 'search']);

Route::get('/dealerships', [DealershipController::class, 'index']);
Route::get('/dealershipscount', [DealershipController::class, 'dealerships_count']);
Route::get('/dealerships/{id}', [DealershipController::class, 'show']);
Route::get('/dealerships/search/{name}', [DealershipController::class, 'search']);

Route::get('/dealershipcars', [DealershipCarsController::class, 'index']);
Route::get('/dealershipcars/{id}', [DealershipCarsController::class, 'show']);

Route::get('/types', [TypeController::class, 'index']);
Route::get('/types/{id}', [TypeController::class, 'show']);
Route::get('/types/search/{name}', [TypeController::class, 'search']);
Route::get('/types/{brand_id}/{rel_type}', [TypeController::class, 'getTypes']);

//Protected routes
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('/brands', [BrandController::class, 'store']);
    Route::put('/brands/{id}', [BrandController::class, 'update']);
    Route::delete('/brands/{id}', [BrandController::class, 'destroy']);

    Route::post('/cars', [CarController::class, 'store']);
    Route::put('/cars/{id}', [CarController::class, 'update']);
    Route::delete('/cars/{id}', [CarController::class, 'destroy']);

    Route::post('/colors', [ColorController::class, 'store']);
    Route::put('/colors/{id}', [ColorController::class, 'update']);
    Route::delete('/colors/{id}', [ColorController::class, 'destroy']);

    Route::post('/dealerships', [DealershipController::class, 'store']);
    Route::put('/dealerships/{id}', [DealershipController::class, 'update']);
    Route::delete('/dealerships/{id}', [DealershipController::class, 'destroy']);

    Route::post('/dealershipcars', [DealershipCarsController::class, 'store']);
    Route::put('/dealershipcars/{id}', [DealershipCarsController::class, 'update']);
    Route::delete('/dealershipcars/{id}', [DealershipCarsController::class, 'destroy']);

    Route::post('/types', [TypeController::class, 'store']);
    Route::put('/types/{id}', [TypeController::class, 'update']);
    Route::delete('/types/{id}', [TypeController::class, 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
