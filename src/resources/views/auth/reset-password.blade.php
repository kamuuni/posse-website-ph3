<x-app-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-light_blue to-blue-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <img src="{{ asset('images/logo-posse.svg') }}" alt="POSSE" class="mx-auto h-12 w-auto">
                <h2 class="mt-6 text-3xl font-Poppins font-bold text-primary_main">
                    パスワードリセット
                </h2>
                <p class="mt-2 text-sm font-Inter text-gray-600">
                    新しいパスワードを設定してください
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8">
                <form method="POST" action="{{ route('password.store') }}" class="space-y-6" novalidate>
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-Inter font-medium text-gray-700 mb-2">
                            メールアドレス
                        </label>
                        <input id="email" 
                               type="email" 
                               name="email" 
                               value="{{ old('email', $request->email) }}" 
                               required 
                               autofocus 
                               autocomplete="username"
                               readonly
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-500 font-Inter cursor-not-allowed">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-Inter font-medium text-gray-700 mb-2">
                            新しいパスワード
                        </label>
                        <input id="password" 
                               type="password" 
                               name="password" 
                               required 
                               autocomplete="new-password"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary_main focus:border-primary_main transition-colors duration-200 font-Inter">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <p class="mt-1 text-xs text-gray-500 font-Inter">
                            8文字以上で設定してください
                        </p>
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
                            パスワードをリセット
                        </button>

                        <div class="text-center">
                            <a href="{{ route('login') }}" 
                               class="text-sm font-Inter text-primary_main hover:text-primary_main/80 transition-colors duration-200">
                                ログインページに戻る
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Security Notice -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-lg font-Poppins font-bold text-gray-800 mb-3 flex items-center">
                    <svg class="w-5 h-5 text-orange-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                    </svg>
                    セキュリティについて
                </h3>
                <div class="space-y-2 text-sm font-Inter text-gray-600">
                    <div class="flex items-start">
                        <svg class="w-4 h-4 text-gray-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>強力なパスワードを設定してください</span>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-4 h-4 text-gray-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>他のサイトで使用していないパスワードを使用してください</span>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-4 h-4 text-gray-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>パスワードは安全に保管してください</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
