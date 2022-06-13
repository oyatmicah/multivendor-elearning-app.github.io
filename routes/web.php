<?php

use Illuminate\Support\Facades\Route;

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
    $categories = App\Models\Category::all();
    $courses = App\Models\Course::all();

    return view('welcome', compact('courses', 'categories'));
});
/*
Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::resource('comments', App\Http\Controllers\CommentController::class);

//courses
Route::resource('courses', App\Http\Controllers\CourseController::class);
Route::post('courses/disapprove', [App\Http\Controllers\CourseController::class, 'disapprove'])->name('courses.disapprove');
Route::post('courses/approve', [App\Http\Controllers\CourseController::class, 'approve'])->name('courses.approve');
//publish and unpublish
Route::post('courses/publishCourse', [App\Http\Controllers\CourseController::class, 'publishCourse'])->name('courses.publishCourse');
Route::post('courses/unpublishCourse', [App\Http\Controllers\CourseController::class, 'unpublishCourse'])->name('courses.unpublishCourse');

Route::resource('courseUsers', App\Http\Controllers\CourseUserController::class);

Route::resource('items', App\Http\Controllers\ItemController::class);

Route::resource('payments', App\Http\Controllers\PaymentController::class);

Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('views', App\Http\Controllers\ViewController::class);

Route::resource('roles', App\Http\Controllers\RoleController::class);

Route::resource('coupons', App\Http\Controllers\CouponController::class);
