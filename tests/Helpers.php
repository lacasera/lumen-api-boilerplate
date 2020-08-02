<?php

namespace Tests;

use Illuminate\Support\Facades\Artisan;

/**
 * helper functions that will be 
 * used across multiple test cases comes in the file
 */


 /**
  * runs migration and seeds database after each test
  */
if (!function_exists('cleanUpDatabase')) {
    function cleanUpDatabase() {
        Artisan::call('migrate:refresh');
        Artisan::call('db:seed');
    }
}

