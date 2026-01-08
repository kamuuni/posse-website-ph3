<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Quiz;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = \App\Models\Quiz::all();

        return view('admin.quizzes.index', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.quizzes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'questions' => 'required|array',
        'questions.*.text' => 'required|string',
        'questions.*.choices' => 'required|array|size:3',
        'questions.*.choices.*.text' => 'required|string',
        'questions.*.correct_index' => 'required|integer|between:0,2',
        ]);

        return DB::transaction(function () use ($validated) {

        // ① 親（Quiz）
        $quiz = Quiz::create(['name' => $validated['name']]);

        foreach ($validated['questions'] as $qData) {
            // ② 子（Question）
            $question = $quiz->questions()->create([
                'text' => $qData['text'],
                'image' => $qData['image'] ?? null,
                'supplement' => $qData['supplement'] ?? null,
            ]);

            // ③ 孫（Choice：必ず3回ループする）
            foreach ($qData['choices'] as $choiceIndex => $cData) {
                $question->choices()->create([
                    'text' => $cData['text'],
                    'is_correct' => ($choiceIndex == $qData['correct_index']),
                ]);
            }
        }

        return redirect()->route('admin.quizzes.index')->with('status', '3択クイズセットを作成しました！');
    });
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
