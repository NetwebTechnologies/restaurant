<?php

use Illuminate\Support\Facades\Route;
use Netweb\CommonServices\Http\Controllers\ServiceImagesController;

Route::get('/imageupload', function() {
    return view('common_services::pages.image-index');
});

Route::prefix('services')->name('services.')->group(function() {

    Route::prefix('images')->name('images.')->controller(ServiceImagesController::class)->group(function () {
        Route::post('/upload', 'uploadImages')->name('upload');
        Route::get('/get', 'fetchimages')->name('get');
        Route::get('/delete', 'deleteImage')->name('delete');
    });

});
