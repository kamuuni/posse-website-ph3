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
        $quizzes = Quiz::withTrashed()->with('questions.choices')->get();

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
        'questions' => 'required|array|min:1|max:10',
        'questions.*.text' => 'required|string|max:255',
        'questions.*.choices' => 'required|array|size:3',
        'questions.*.choices.*.text' => 'required|string|max:255',
        'questions.*.correct_index' => 'required|integer|between:0,2',
        'questions.*.image' => 'nullable|string',
        'questions.*.supplement' => 'nullable|string',
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
    public function edit(Quiz $quiz)
    {
        $quiz->load('questions.choices');

        return view('admin.quizzes.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'questions' => 'required|array|min:1|max:10',
            'questions.*.text' => 'required|string|max:255',
            'questions.*.choices' => 'required|array|size:3',
            'questions.*.choices.*.text' => 'required|string|max:255',
            'questions.*.correct_index' => 'required|integer|between:0,2',
        ]);

        DB::transaction(
            function () use ($validated, $quiz) {
                // ① クイズ名を更新
                $quiz->update(['name' => $validated['name']]);

                // ② 【ここがポイント】既存の設問（と紐づく選択肢）を一旦すべて削除
                // データベース側で Cascade Delete が設定されていればこれだけで選択肢も消えます
                $quiz->questions()->delete();

                // ③ 新しく作り直す（storeのロジックと共通）
                foreach ($validated['questions'] as $qData) {
                    $question = $quiz->questions()->create([
                        'text' => $qData['text'],
                    ]);

                    foreach ($qData['choices'] as $choiceIndex => $cData) {
                        $question->choices()->create([
                            'text' => $cData['text'],
                            'is_correct' => ($choiceIndex == $qData['correct_index']),
                        ]);
                    }
                }
            }
        );

        return redirect()
            ->route('admin.quizzes.index')
            ->with('status', 'クイズを更新しました！');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();

        return redirect()
            ->route('admin.quizzes.index')
            ->with('success', "クイズ「{$quiz->name}」を削除しました。");
    }
}
