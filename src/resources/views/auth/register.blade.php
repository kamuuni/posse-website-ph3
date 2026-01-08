<x-app-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-light_blue to-blue-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <img src="{{ asset('images/logo-posse.svg') }}" alt="POSSE" class="mx-auto h-12 w-auto">
                <h2 class="mt-6 text-3xl font-Poppins font-bold text-primary_main">
                    新規登録
                </h2>
                <p class="mt-2 text-sm font-Inter text-gray-600">
                    POSSEアカウントを作成してください
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8">
                <form method="POST" action="{{ route('register') }}" class="space-y-6" novalidate>
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-Inter font-medium text-gray-700 mb-2">
                            お名前
                        </label>
                        <input id="name" 
                               type="text" 
                               name="name" 
                               value="{{ old('name') }}" 
                               required 
                               autofocus 
                               autocomplete="name"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary_main focus:border-primary_main transition-colors duration-200 font-Inter">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

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
                               autocomplete="new-password"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary_main focus:border-primary_main transition-colors duration-200 font-Inter">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-Inter font-medium text-gray-700 mb-2">
                            パスワード確認
                        </label>
                        <input id="password_confirmation" 
                               type="password" 
                               name="password_confirmation" 
                               required 
                               autocomplete="new-password"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary_main focus:border-primary_main transition-colors duration-200 font-Inter">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="space-y-4">
                        <button type="submit" 
                                class="w-full bg-primary_main hover:bg-primary_main/90 text-white font-Inter font-semibold py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-primary_main focus:ring-offset-2">
                            アカウント作成
                        </button>

                        <div class="text-center">
                            <span class="text-sm font-Inter text-gray-600">すでにアカウントをお持ちの方は </span>
                            <a href="{{ route('login') }}" 
                               class="text-sm font-Inter text-primary_main hover:text-primary_main/80 font-medium transition-colors duration-200">
                                ログイン
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
