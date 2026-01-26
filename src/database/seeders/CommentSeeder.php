<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $posts = Post::all();

        // 記事が一つもない場合は、まず記事を作るように促すか、ここで作成する
        if ($posts->isEmpty() || $users->isEmpty()) {
            return;
        }

        // 各記事に対して、ランダムな数（1〜5件）のコメントを作成する
        $posts->each(function ($post) use ($users) {
            Comment::factory(rand(1, 5))->create([
                'post_id' => $post->id,
                'user_id' => $users->random()->id,
            ]);
        });
    }
}
