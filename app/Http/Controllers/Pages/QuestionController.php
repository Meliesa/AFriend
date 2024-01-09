<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('pages.questions.index', compact('questions'));
    }

    public function create()
    {
        return view('pages.questions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required',
        ]);

        Question::create([
            'text' => $request->text,
        ]);

        return redirect()->route('pages.questions.index')->with('success', 'Question added successfully!');
    }

    public function edit(Question $question)
    {
        return view('pages.questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $request->validate([
            'text' => 'required',
        ]);

        $question->update([
            'text' => $request->text,
        ]);

        return redirect()->route('pages.questions.index')->with('success', 'Question updated successfully!');
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('pages.questions.index')->with('success', 'Question deleted successfully!');
    }
}
