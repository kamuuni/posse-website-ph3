<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $itQuiz = Quiz::create(['name' => 'ITクイズ']);

        $q1 = Question :: create([
            'quiz_id' => $itQuiz->id,
            'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
        ]);
        Choice::create(['question_id' => $q1->id, 'text' => '約79万人', 'is_correct' => true]);
        Choice::create(['question_id' => $q1->id, 'text' => '約28万人', 'is_correct' => false]);
        Choice::create(['question_id' => $q1->id, 'text' => '約183万人', 'is_correct' => false]);

        $q2 = Question::create([
        'quiz_id' => $itQuiz->id,
        'text' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？',
        ]);
        Choice::create(['question_id' => $q2->id, 'text' => 'X-TECH', 'is_correct' => true]);
        Choice::create(['question_id' => $q2->id, 'text' => 'INTECH', 'is_correct' => false]);
        Choice::create(['question_id' => $q2->id, 'text' => 'BIZZTECH', 'is_correct' => false]);

        $q3 = Question::create([
            'quiz_id' => $itQuiz->id,
            'text' => 'IoTとは何の略でしょう？',
        ]);
        Choice::create(['question_id' => $q3->id, 'text' => 'Internet of Things', 'is_correct' => true]);
        Choice::create(['question_id' => $q3->id, 'text' => 'Information on Tool', 'is_correct' => false]);
        Choice::create(['question_id' => $q3->id, 'text' => 'Integrate into Technology', 'is_correct' => false]);

        Quiz::factory(100)->create()->each(function ($quiz) {
        // 各クイズに3つの設問を作る
        Question::factory(3)->create(['quiz_id' => $quiz->id])->each(function ($question) {
            // 各設問に3つの選択肢を作る
            Choice::factory(3)->create(['question_id' => $question->id]);
            
            // そのうち1つだけをランダムに「正解」に書き換える（構造的な工夫！）
            $question->choices()->inRandomOrder()->first()->update(['is_correct' => true]);
        });
    });
    }

}
