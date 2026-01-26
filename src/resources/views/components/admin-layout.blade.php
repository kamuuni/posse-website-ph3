<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>管理者パネル - {{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('scripts')
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="min-h-screen flex">
            <!-- サイドバー -->
            <aside class="w-64 bg-gray-800 shadow-lg sticky top-0 h-screen">
                <!-- ロゴ・ブランド -->
                <div class="flex items-center justify-center h-16 bg-gray-900">
                    <div class="flex items-center">
                        <svg class="h-8 w-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span class="ml-2 text-xl font-bold text-white">Admin Panel</span>
                    </div>
                </div>

                <!-- ナビゲーション -->
                <nav class="mt-8">
                    <div class="px-4">
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">メニュー</p>
                    </div>

                    <!-- ダッシュボード -->
                    <a href="{{ route('admin.dashboard') }}"
                       class="flex items-center px-6 py-3 mt-4 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700 text-white border-r-4 border-blue-500' : '' }}">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z"></path>
                        </svg>
                        <span class="ml-3">ダッシュボード</span>
                    </a>

                    <!-- クイズ管理 -->
                    <a href="{{ route('admin.quizzes.index') }}"
                       class="flex items-center px-6 py-3 mt-1 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ request()->routeIs('admin.quizzes.*') ? 'bg-gray-700 text-white border-r-4 border-blue-500' : '' }}">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span class="ml-3">クイズ管理</span>
                    </a>

                     <!-- 投稿管理 -->
                    <a href="{{ route('admin.posts.index') }}"
                       class="flex items-center px-6 py-3 mt-1 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ request()->routeIs('admin.posts.*') ? 'bg-gray-700 text-white border-r-4 border-blue-500' : '' }}">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span class="ml-3">投稿管理</span>
                    </a>

                     <!-- ユーザー管理 -->
                    <a href="{{ route('admin.users.index') }}"
                       class="flex items-center px-6 py-3 mt-1 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 {{ request()->routeIs('admin.posts.*') ? 'bg-gray-700 text-white border-r-4 border-blue-500' : '' }}">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span class="ml-3">ユーザー管理</span>
                    </a>

                    <div class="px-4 mt-8">
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">その他</p>
                    </div>

                    <!-- ユーザー画面へ -->
                    <a href="{{ route('quizzes.index') }}"
                       class="flex items-center px-6 py-3 mt-4 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        <span class="ml-3">ユーザー画面</span>
                    </a>
                </nav>

                <!-- ユーザー情報 -->
                <div class="absolute bottom-0 w-64 p-4 bg-gray-900">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 bg-blue-500 rounded-full flex items-center justify-center">
                                <span class="text-sm font-medium text-white">{{ substr(auth()->user()->name, 0, 1) }}</span>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-white">{{ auth()->user()->name }}</p>
                            <p class="text-xs text-gray-400">管理者</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left text-sm text-gray-400 hover:text-white transition-colors duration-200">
                                ログアウト
                            </button>
                        </form>
                    </div>
                </div>
            </aside>

            <!-- メインコンテンツ -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- ヘッダー -->
                @if (isset($header))
                    <header class="bg-white shadow-sm border-b border-gray-200">
                        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- メインコンテンツエリア -->
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <!-- 成功メッセージ -->
                        @if(session('status'))
                            <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative" role="alert">
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>{{ session('status') }}</span>
                                </div>
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative" role="alert">
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>{{ session('success') }}</span>
                                </div>
                            </div>
                        @endif

                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
