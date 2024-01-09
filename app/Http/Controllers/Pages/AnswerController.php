<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Support\Facades\DB;


class AnswerController extends Controller
{
    public function create()
    {
        $questions = Question::all();
        return view('pages.answers.create', compact('questions'));
    }

    public function store(Request $request)
    {
        $userId = auth()->user()->id;
    
        // Delete existing answers for the user
        Answer::where('user_id', $userId)->delete();
    
        // Assuming you have a form with inputs named 'answers'
        foreach ($request->input('answers') as $questionId => $value) {
            Answer::create([
                'user_id' => $userId,
                'question_id' => $questionId,
                'value' => $value,
            ]);
        }
    
        // Calculate depression level based on responses
        $depressionLevel = $this->calculateDepressionLevel($userId);
    
        // Redirect to a route where you calculate depression level (Step 8)
        return redirect()->route('pages.answers.show')->with('depression_level', $depressionLevel)->with('success', 'Your answers have been submitted successfully!');
    }
    

    public function calculateDepressionLevel($userId)
    {
        $userAnswers = Answer::where('user_id', $userId)->get();
    
        // Log individual values for each question
        foreach ($userAnswers as $answer) {
            \Log::info("Question ID: $answer->question_id, Value: $answer->value");
        }
    
        // Calculate the sum of answers
        $sum = $userAnswers->sum('value');
    
        // Log the sum
        \Log::info("Total Sum: $sum");
    
        // Determine depression level based on the sum
        if ($sum >= 0 && $sum <= 7) {
            $depressionLevel = 'Normal Stress';
        } elseif ($sum >= 8 && $sum <= 9) {
            $depressionLevel = 'Mild Stress';
        } elseif ($sum >= 10 && $sum <= 12) {
            $depressionLevel = 'Moderate Stress';
        } elseif ($sum >= 13 && $sum <= 16) {
            $depressionLevel = 'Severe Stress';
        } else {
            $depressionLevel = 'Extremely Severe Stress';
        }
    
        // Log the depression level
        \Log::info("Depression Level: $depressionLevel");
    
        return $depressionLevel;
    }
    

    public function show()
    {
        // Retrieve depression level from the session
        $depressionLevel = session('depression_level');

        return view('pages.answers.show', compact('depressionLevel'));
    }
    
    public function view()
    {
        // Fetch the latest answers for each question
        $latestAnswers = Answer::select('question_id', 'user_id', 'value')
            ->groupBy('question_id', 'user_id', 'value')
            ->latest('created_at') // Order by the latest created_at timestamp
            ->get();
    
        // Transform the results to include the depression level
        $resultsWithDepressionLevel = $latestAnswers->groupBy('user_id')->map(function ($answers) {
            $totalValue = $answers->sum('value');
            $depressionLevel = $this->calculateDepressionLevel($totalValue);
    
            return [
                'user_id' => $answers[0]->user_id, // Assuming user_id is the same for all answers
                'depressionLevel' => $depressionLevel,
            ];
        });
    
        return view('pages.answers.view', compact('resultsWithDepressionLevel'));
    }    

}
