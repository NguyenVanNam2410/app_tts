<?php

use App\Http\Controllers\ThematicController;
use Illuminate\Support\Facades\DB;
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

// Route::get('/thematic', function () {
//     DB::table('thematics')->insert([
//         'name'             => 'Git',
//         'description'      => 'git là hệ thống quản lí phần mềm phân tán',
//         'number_questions' => 0,
//         'status'           => 1,        
//     ]);
//     return "cập nhật chuyên đề thành công";
// });

Route::get('/thematic', [ThematicController::class,'index']);
Route::get('/thematic/edit', [ThematicController::class,'edit']);
