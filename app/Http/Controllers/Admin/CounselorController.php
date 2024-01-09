<?php

namespace App\Http\Controllers\Admin;

use App\Models\Counsellor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CounselorController extends Controller
{
    public function index()
    {
        $counsellors = Counsellor::all();
        return view('admin.counsellors.index', compact('counsellors'));
    }

    public function create()
    {
        return view('admin.counsellors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:counsellors',
            'phone' => 'required',
            'password' => 'required',
        ]);

        Counsellor::create($request->all());

        return redirect()->route('admin.counsellors.index')->with('success', 'Counselor created successfully');
    }

    public function edit(Counsellor $counsellor)
    {
        return view('admin.counsellors.edit', compact('counsellor'));
    }

    public function update(Request $request, Counsellor $counsellor)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:counsellors,email,' . $counsellor->id,
            'phone' => 'required',
            'password' => 'required',
        ]);

        $counsellor->update($request->all());

        return redirect()->route('admin.counsellors.index')->with('success', 'Counselor updated successfully');
    }

    public function destroy(Counsellor $counsellor)
    {
        $counsellor->delete();

        return redirect()->route('admin.counsellors.index')->with('success', 'Counsellor deleted successfully');
    }

    public function __construct()
    {
        $this->middleware('auth'); 
    }

}

