<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>管理者パネル - {{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- ここで共通のJS（app.js）と、今回のクイズ用JSなどを読み込む --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- 予約席：特定のページだけで使いたいJSをここに流し込む --}}
        @stack('scripts')
    </head>
    <body class="font-sans antialiased bg-gray-900 text-white"> {{-- 管理者っぽい背景 --}}
        <div class="min-h-screen flex">
            {{-- 管理者専用のサイドバー --}}
            <aside class="w-64 bg-gray-800 shadow-md">
                <div class="p-6 text-xl font-bold">Admin Dashboard</div>
                <nav class="mt-4">
                    <a href="{{ route('admin.quizzes.index') }}" class="block py-2 px-4 hover:bg-gray-700">クイズ一覧</a>
                </nav>
            </aside>

            <div class="flex-1">

                @if (isset($header))
                    <header class="bg-gray-900 shadow sticky top-0">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <main class="p-8">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
