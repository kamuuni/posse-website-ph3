<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
{
    // 1. ログインチェック ＆ 管理者チェック
    if (auth()->check() && auth()->user()->is_admin) {
        return $next($request); // 通過！
    }

    // 2. どちらかに失敗したらここで終了（早期リターン）
    abort(403, '管理者権限が必要です。');
}


}
