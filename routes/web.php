<?php

use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return redirect('/karyawan');
});

Route::resource('karyawan', KaryawanController::class);