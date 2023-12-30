<?php

	use App\Controllers\UsersController;
	use LionRoute\Route;

	Route::post('users', [UsersController::class, 'createUsers']);
	Route::get('users', [UsersController::class, 'readUsers']);
	Route::put('users/{idusers}', [UsersController::class, 'updateUsers']);
	Route::delete('users/{idusers}', [UsersController::class, 'deleteUser']);