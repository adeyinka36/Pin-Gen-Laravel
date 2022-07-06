<?php

use Illuminate\Support\Facades\Route;
use PinGenerator\PinGeneratorController;

Route::get('generate', [PinGeneratorController::class, 'generate']);
