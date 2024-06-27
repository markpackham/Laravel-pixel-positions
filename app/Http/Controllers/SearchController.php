<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // Use __invoke() when a controller only needs to have 1 action
    public function __invoke()
    {
        // Always use "with()" and eager load rather than lazy load to avoid n+1 performance issue
        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('title', 'LIKE', '%' . request('q') . '%')
            ->get();

        return view('results', ['jobs' => $jobs]);
    }
}
