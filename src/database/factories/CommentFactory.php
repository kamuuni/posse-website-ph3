<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            // 既存のユーザーからランダムに選ぶか、新しく作る
            'user_id' => User::factory(),
            // 既存の記事からランダムに選ぶか、新しく作る
            'post_id' => Post::factory(),
            // リアルな日本語の文章（20文字程度）を生成
            'body'    => fake()->realText(50),
            'created_at' => fake()->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
