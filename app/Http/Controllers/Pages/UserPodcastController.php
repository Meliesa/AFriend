<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Podcast;

class UserPodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::all();
        return view('pages.podcasts.index', compact('podcasts'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
