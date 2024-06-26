<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Using route model binding to ask for tag
    public function __invoke(Tag $tag)
    {
        // Show all jobs associated with a tag
        return view('results', ['jobs' => $tag->jobs]);
    }
}
