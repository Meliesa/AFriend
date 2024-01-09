<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Support\Facades\Auth;

class JournalController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $journals = Journal::where('user_id', $user->id)->get();
        return view('pages.journals.index', compact('journals'));
    }

    public function create()
    {
        return view('pages.journals.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'mood' => 'required',
            'content' => 'required',
        ]);

        $journal = new Journal($validatedData);
        $journal->user_id = Auth::id(); // Set the user_id before creating
        $journal->save();

        return redirect('/pages/journals')->with('success', 'New journal entry created successfully!');
    }

    public function show($id)
    {
        $journal = Journal::findOrFail($id);
        $this->authorize('view', $journal);
        return view('pages.journals.show', compact('journal'));
    }

    public function edit(Journal $journal)
    {
        $this->authorize('view', $journal);
        
        return view('pages.journals.edit', compact('journal'));
    }

    public function update(Request $request, Journal $journal)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255' .$journal->id,
            'mood' => 'required',
            'content' => 'required',
        ]);

        $journal->update($request->all());

        return redirect()->route('pages.journals.index')->with('success', 'Journal has been updated successfully');
    }

    public function destroy(Journal $journal)
    {
        $journal->delete();

        return redirect()->route('pages.journals.index')->with('success', 'Journal has been deleted successfully!');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }


}
