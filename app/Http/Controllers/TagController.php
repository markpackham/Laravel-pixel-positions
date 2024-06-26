<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::where('title', 'LIKE', '%' . request('q') . '%')->get();

        return view('results', ['tags' => $tags]);
    }
}
