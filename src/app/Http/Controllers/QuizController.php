<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use Database\Seeders\ChoiceSeeder;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::withCount('questions')->paginate(6);

        return view('quizzes.index', compact('quizzes'));
    }
    public function show(Quiz $quiz)
    {
        $quiz->load('questions.Choices');
        return view('quizzes.show', compact('quiz'));
    }

}
