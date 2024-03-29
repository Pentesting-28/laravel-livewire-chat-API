<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Template\DashboardComponent;
use App\Http\Livewire\Notification\Index as NotificationIndex;
use App\Http\Livewire\Notification\Create as NotificationCreate;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');

    Route::group(['prefix' => 'notifications'], function () {
		Route::get("/", NotificationIndex::class)->name('notification.index');
		Route::get("/notifications-create", NotificationCreate::class)->name('notification.create');
	});
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
