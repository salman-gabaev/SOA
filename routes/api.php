<?php

use App\Http\Controllers\Api\DataController;
use App\Services\Server\JsonRpcServer;
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

Route::post('/data', function (Request $request, JsonRpcServer $server, DataController $controller) {
    return $server->handle($request, $controller);
});
