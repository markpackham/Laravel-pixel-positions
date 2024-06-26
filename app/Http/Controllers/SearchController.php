<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    // Use __invoke() when a controller only needs to have 1 action
    public function __invoke()
    {
        dd("Hello");
    }
}
