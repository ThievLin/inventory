<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LonginController;

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

Route::get('/', function () {
    return view('welcome');
});

route::get('login', [LonginController::class, 'index']);
route::get('admin', [LonginController::class, 'admin']);
route::get('dashboard', [LonginController::class, 'dashboard']);
route::get('inventory', [LonginController::class, 'inventory']);
route::get('supplier', [LonginController::class, 'supplier']);
route::get('items', [LonginController::class, 'item']);
route::get('orders', [LonginController::class, 'order']);
route::get('product', [LonginController::class, 'product']);
route::get('addons', [LonginController::class, 'addons']);
route::get('reports', [LonginController::class, 'reports']);
route::get('sidebar', [LonginController::class, 'sidebar']);
route::get('accounting', [LonginController::class, 'accounting']);
route::get('setting', [LonginController::class, 'setting']);












