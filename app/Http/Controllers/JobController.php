<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');

        return view('jobs.index', [
            'jobs' => $jobs[0],
            'featuredJobs' => $jobs[1],
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Part Time', 'Full Time'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ]);

        // If "featured" checkbox isn't checked then nothing is passed so NOT featured
        $attributes['featured'] = $request->has('featured');

        // "Arr" is the array but we exclude "tags"
        // alternative solution to use $request->except(['tags']) to exclude tags
        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            // Tags like "laravel,backend,frontend" turn into an array eg ['laravel','backend','frontend']
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');
    }

}
