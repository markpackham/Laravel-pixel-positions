<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // Use __invoke() when a controller only needs to have 1 action
    public function __invoke()
    {
        $jobs = Job::where('title', 'LIKE', '%' . request('q') . '%')->get();

        return view('results', ['jobs' => $jobs]);
    }
}
