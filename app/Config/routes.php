<?php

/*
 * Sippy 2.0
 * Routes
 * */

use App\Core\Router as Route;
// START routes below



Route::get('/', '\App\Controllers\Main@home');




// END routes
Route::dispatch();