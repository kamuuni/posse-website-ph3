<x-app-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-light_blue to-blue-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <img src="{{ asset('images/logo-posse.svg') }}" alt="POSSE" class="mx-auto h-12 w-auto">
                <h2 class="mt-6 text-3xl font-Poppins font-bold text-primary_main">
                    ログイン
                </h2>
                <p class="mt-2 text-sm font-Inter text-gray-600">
                    POSSEアカウントにログインしてください
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6" novalidate>
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-Inter font-medium text-gray-700 mb-2">
                            メールアドレス
                        </label>
                        <input id="email" 
                               type="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               required 
                               autofocus 
                               autocomplete="username"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary_main focus:border-primary_main transition-colors duration-200 font-Inter">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-Inter font-medium text-gray-700 mb-2">
                            パスワード
                        </label>
                        <input id="password" 
                               type="password" 
                               name="password" 
                               required 
                               autocomplete="current-password"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary_main focus:border-primary_main transition-colors duration-200 font-Inter">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input id="remember_me" 
                               type="checkbox" 
                               name="remember"
                               class="h-4 w-4 text-primary_main focus:ring-primary_main border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm font-Inter text-gray-700">
                            ログイン状態を保持する
                        </label>
                    </div>

                    <div class="space-y-4">
                        <button type="submit" 
                                class="w-full bg-primary_main hover:bg-primary_main/90 text-white font-Inter font-semibold py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-primary_main focus:ring-offset-2">
                            ログイン
                        </button>

                        @if (Route::has('password.request'))
                            <div class="text-center">
                                <a href="{{ route('password.request') }}" 
                                   class="text-sm font-Inter text-primary_main hover:text-primary_main/80 transition-colors duration-200">
                                    パスワードをお忘れですか？
                                </a>
                            </div>
                        @endif

                        @if (Route::has('register'))
                            <div class="text-center">
                                <span class="text-sm font-Inter text-gray-600">アカウントをお持ちでない方は </span>
                                <a href="{{ route('register') }}" 
                                   class="text-sm font-Inter text-primary_main hover:text-primary_main/80 font-medium transition-colors duration-200">
                                    新規登録
                                </a>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
