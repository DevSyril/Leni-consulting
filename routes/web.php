<?php

use App\Http\Controllers\Admins\AboutController;
use App\Http\Controllers\Admins\PartnersController;
use App\Http\Controllers\Admins\ServiceController;
use App\Http\Controllers\Visitors\Views\MainController as VisitorMainController;
use App\Http\Controllers\Admins\Views\MainConfroller as AdminMainController;
use App\Http\Controllers\Admins\BannerController as AdminBannerController;
use Illuminate\Support\Facades\Route;

Route::get("/", [VisitorMainController::class, "home"])->name("home");

Route::get("/admin", [AdminMainController::class, "adminHome"])->name("admins.home");

Route::resource("banners", AdminBannerController::class);

Route::resource("services", ServiceController::class);

Route::resource("partners", PartnersController::class);

Route::resource("about", AboutController::class);

Route::post("about/update/{id}", [AboutController::class, 'update'])->name('update-about');

Route::post("banner/upload", [AdminBannerController::class, 'store'])->name('upload-banner');
