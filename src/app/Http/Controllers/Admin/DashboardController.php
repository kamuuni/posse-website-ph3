<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Quiz;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // 統計情報を取得
        $stats = [
            'total_quizzes' => Quiz::count(),
            'active_quizzes' => Quiz::whereNull('deleted_at')->count(),
            'deleted_quizzes' => Quiz::onlyTrashed()->count(),
            'total_questions' => Quiz::withCount('questions')->get()->sum('questions_count'),
            'total_users' => User::count(),
            'admin_users' => User::where('is_admin', true)->count(),
        ];
        
        // 最近のクイズ（5件）
        $recent_quizzes = Quiz::withCount('questions')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('user', 'stats', 'recent_quizzes'));
    }
}
