<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::get('/role', [RoleController::class, 'Role'])->name('role')->middleware('auth');

Route::get('admin-only', [RoleController::class, 'OnlyForAdmin'])->middleware('can:xAdmin');
Route::get('editor-only', [RoleController::class, 'OnlyForEditor'])->middleware('can:xEditor');
Route::get('author-only', [RoleController::class, 'OnlyForAuthor'])->middleware('can:xAuthor');
Route::get('user-only', [RoleController::class, 'OnlyForUser'])->middleware('can:xUser');

Route::get('/secret', [RoleController::class, 'Secret'])->middleware('can:xSecret');
Route::get('blog-dashboard', [RoleController::class, 'BlogDashboard'])->middleware('auth');


//Login Logout Using JWT
Route::get('/LoginPage', [AuthController::class, 'LoginPage'])->name('LoginPage');
Route::get('/RegistationPage', [AuthController::class, 'RegistationPage'])->name('RegistationPage');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('me', [AuthController::class, 'me']);
});