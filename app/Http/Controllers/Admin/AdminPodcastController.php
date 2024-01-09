<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\IsAdmin;
use App\Models\Podcast;

class AdminPodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::all();
        return view('admin.podcasts.index', compact('podcasts'));
    }

    public function create()
    {
        return view('admin.podcasts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'spotify_url' => 'required|url',
        ]);

        Podcast::create($request->all());

        return redirect()->route('admin.podcasts.index');
    }

    public function edit($id)
    {
        $podcast = Podcast::findOrFail($id);
        return view('admin.podcasts.edit', compact('podcast'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'spotify_url' => 'required|url',
        ]);

        $podcast = Podcast::findOrFail($id);
        $podcast->update($request->all());

        return redirect()->route('admin.podcasts.index');
    }

    public function destroy($id)
    {
        $podcast = Podcast::findOrFail($id);
        $podcast->delete();

        return redirect()->route('admin.podcasts.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
