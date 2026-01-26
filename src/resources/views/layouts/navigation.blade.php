<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed top-0 left-0 right-0 z-50 shadow-sm">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{{ asset('images/logo-posse.svg') }}" alt="POSSE" class="h-8 w-auto">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <!-- Home Dropdown -->
                <div class="relative" x-data="{ homeOpen: false }">
                    <button @click="homeOpen = !homeOpen" class="flex items-center text-gray-700 hover:text-primary_main font-Inter text-sm font-medium transition-colors duration-200">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        ホーム
                        <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="homeOpen" @click.away="homeOpen = false" x-transition class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 z-50">
                        <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-medium">トップページ</a>
                        <div class="border-t border-gray-100 my-1"></div>
                        <a href="/#about-us" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">POSSEとは</a>
                        <a href="/#goal" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">POSSEの目指すところ</a>
                        <a href="/#flow-of-learning" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">学習の流れ</a>
                        <a href="/#feature" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">POSSEの特徴</a>
                        <a href="/#benefit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">メンバーの特典</a>
                        <a href="/#weekly-schedule" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">週間スケジュール</a>
                        <a href="/#membership-fee" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">会費について</a>
                        <a href="/#faq" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">よくある質問</a>
                    </div>
                </div>

                <!-- Quiz Link -->
                <a href="{{ route('quizzes.index') }}" class="flex items-center text-gray-700 hover:text-primary_main font-Inter text-sm font-medium transition-colors duration-200">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    クイズ
                </a>

                <!-- Posts Link -->
                <a href="{{ route('posts.index') }}" class="flex items-center text-gray-700 hover:text-primary_main font-Inter text-sm font-medium transition-colors duration-200">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    ブログ
                </a>

                <!-- Action Buttons (Always visible) -->
                <div class="flex items-center space-x-3">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScU1KrvLVJIMb_lOW6Ke3kDPJOlERlfC-wzWkCI9iJfuU3LAg/viewform" target="_blank" rel="noopener noreferrer" class="bg-primary_main hover:bg-primary_main/90 text-white px-4 py-2 rounded-md text-sm font-Inter font-medium transition-colors duration-200">
                        お問い合わせ
                    </a>
                    <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md text-sm font-Inter font-medium transition-colors duration-200 flex items-center">
                        <span class="mr-1">●</span>
                        友達追加
                    </a>
                    
                    <!-- Login/User Button -->
                    @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:text-gray-900 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    プロフィール
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        ログアウト
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-primary_main font-Inter text-sm font-medium transition-colors duration-200">
                            ログイン
                        </a>
                        <a href="{{ route('register') }}" class="bg-primary_main hover:bg-primary_main/90 text-white px-4 py-2 rounded-md text-sm font-Inter font-medium transition-colors duration-200">
                            新規登録
                        </a>
                    @endauth
                </div>
            </div>

            <!-- Mobile Hamburger -->
            <div class="lg:hidden flex items-center">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1 bg-white border-t border-gray-200">
            <!-- Home Section -->
            <div class="px-4 py-2">
                <div class="flex items-center text-primary_main font-medium text-base mb-2">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    ホーム
                </div>
                <div class="ml-7 space-y-1">
                    <a href="/" class="block py-1 text-sm text-gray-700 hover:text-primary_main font-medium">
                        トップページ
                    </a>
                    <a href="/#about-us" class="block py-1 text-sm text-gray-600 hover:text-primary_main">
                        POSSEとは
                    </a>
                    <a href="/#goal" class="block py-1 text-sm text-gray-600 hover:text-primary_main">
                        POSSEの目指すところ
                    </a>
                    <a href="/#flow-of-learning" class="block py-1 text-sm text-gray-600 hover:text-primary_main">
                        学習の流れ
                    </a>
                    <a href="/#feature" class="block py-1 text-sm text-gray-600 hover:text-primary_main">
                        POSSEの特徴
                    </a>
                    <a href="/#benefit" class="block py-1 text-sm text-gray-600 hover:text-primary_main">
                        メンバーの特典
                    </a>
                    <a href="/#weekly-schedule" class="block py-1 text-sm text-gray-600 hover:text-primary_main">
                        週間スケジュール
                    </a>
                    <a href="/#membership-fee" class="block py-1 text-sm text-gray-600 hover:text-primary_main">
                        会費について
                    </a>
                    <a href="/#faq" class="block py-1 text-sm text-gray-600 hover:text-primary_main">
                        よくある質問
                    </a>
                </div>
            </div>
            
            <!-- Quiz Section -->
            <div class="px-4 py-2 border-t border-gray-200">
                <a href="{{ route('quizzes.index') }}" class="flex items-center text-gray-700 hover:text-primary_main font-medium text-base">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    クイズ
                </a>
            </div>

            <!-- Posts Section -->
            <div class="px-4 py-2 border-t border-gray-200">
                <a href="{{ route('posts.index') }}" class="flex items-center text-gray-700 hover:text-primary_main font-medium text-base">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    ブログ
                </a>
            </div>
        </div>

        <!-- Mobile Action Buttons -->
        <div class="pt-4 pb-1 border-t border-gray-200 bg-white">
            <!-- Always visible action buttons -->
            <div class="px-4 space-y-3 mb-4">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScU1KrvLVJIMb_lOW6Ke3kDPJOlERlfC-wzWkCI9iJfuU3LAg/viewform" target="_blank" rel="noopener noreferrer" class="block w-full text-center bg-primary_main hover:bg-primary_main/90 text-white px-4 py-2 rounded-md text-sm font-Inter font-medium">
                    お問い合わせ
                </a>
                <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer" class="block w-full text-center bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md text-sm font-Inter font-medium">
                    <span class="mr-1">●</span>
                    友達追加
                </a>
            </div>
            
            <!-- Auth section -->
            @auth
                <div class="px-4 border-t border-gray-200 pt-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        プロフィール
                    </x-responsive-nav-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            ログアウト
                        </x-responsive-nav-link>
                    </form>
                </div>
            @else
                <div class="px-4 border-t border-gray-200 pt-4 space-y-3">
                    <a href="{{ route('login') }}" class="block w-full text-center border border-gray-300 text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-md text-sm font-Inter font-medium">
                        ログイン
                    </a>
                    <a href="{{ route('register') }}" class="block w-full text-center bg-primary_main hover:bg-primary_main/90 text-white px-4 py-2 rounded-md text-sm font-Inter font-medium">
                        新規登録
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>
