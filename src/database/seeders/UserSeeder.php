<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 管理者ユーザー
        User::unguard();
        User::create([
            'name' => 'POSSE管理者',
            'email' => 'admin@posse.com',
            'is_admin' => true,
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);
        User::reguard();

        // テストユーザー1
        User::create([
            'name' => '田中太郎',
            'email' => 'tanaka@example.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // テストユーザー2
        User::create([
            'name' => '佐藤花子',
            'email' => 'sato@example.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // テストユーザー3
        User::create([
            'name' => '山田次郎',
            'email' => 'yamada@example.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // POSSE生ユーザー1
        User::create([
            'name' => '早稲田大学 鈴木一郎',
            'email' => 'suzuki@waseda.jp',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // POSSE生ユーザー2
        User::create([
            'name' => '慶應義塾大学 高橋美咲',
            'email' => 'takahashi@keio.jp',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // POSSE生ユーザー3
        User::create([
            'name' => '明治大学 伊藤健太',
            'email' => 'ito@meiji.ac.jp',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // 追加のテストユーザー（ファクトリーを使用して10人作成）
        User::factory(10)->create();
    }
}
