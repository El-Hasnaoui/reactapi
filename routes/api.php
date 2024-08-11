<?php

use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\HomePageEtcController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::get('/chartData', [ChartController::class,'onAllSelect'])->name('chartData');
Route::get('/clientReview', [ClientReviewController::class,'onAllSelect'])->name('clientReview');
Route::post('/contactSend', [ContactController::class,'onContactSend'])->name('contactSend');
Route::get('/courseHome', [CoursesController::class,'onSelectFour'])->name('courseHome');
Route::get('/courseAll', [CoursesController::class,'onSelectAll'])->name('courseAll');
Route::post('/courseDetails', [CoursesController::class,'onSelectDetails'])->name('courseDetails');
Route::get('/footerData', [FooterController::class,'onSelectFooterData'])->name('footerData');
Route::get('/InfoData', [InformationController::class,'onSelectInformationData'])->name('InfoData');
Route::get('/serviceData', [ServiceController::class,'serviceView'])->name('serviceData');

Route::get('/projectsHome', [ProjectController::class,'onSelectFour'])->name('projectsHome');
Route::get('/projectsAll', [ProjectController::class,'onSelectAll'])->name('projectsAll');
Route::post('/projectsDetails', [ProjectController::class,'onSelectDetails'])->name('projectsDetails');

Route::get('/home/video', [HomePageEtcController::class,'selectVideo']);
Route::get('/TotalHome', [HomePageEtcController::class,'selectTotalHome']);
Route::get('/TechHome', [HomePageEtcController::class,'selectTechHome']);
Route::get('/homePage/title', [HomePageEtcController::class,'selectHomeTitle']);
