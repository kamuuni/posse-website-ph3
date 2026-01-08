<x-app-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-light_blue to-blue-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <img src="{{ asset('images/logo-posse.svg') }}" alt="POSSE" class="mx-auto h-12 w-auto">
                <h2 class="mt-6 text-3xl font-Poppins font-bold text-primary_main">
                    パスワードをお忘れですか？
                </h2>
                <p class="mt-2 text-sm font-Inter text-gray-600">
                    メールアドレスを入力してください
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8">
                <!-- Information Message -->
                <div class="mb-6 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-blue-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-Inter text-blue-800">
                                パスワードを忘れても大丈夫です。メールアドレスを入力していただければ、新しいパスワードを設定できるリンクをお送りします。
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}" class="space-y-6" novalidate>
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
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary_main focus:border-primary_main transition-colors duration-200 font-Inter"
                               placeholder="your-email@example.com">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="space-y-4">
                        <button type="submit" 
                                class="w-full bg-primary_main hover:bg-primary_main/90 text-white font-Inter font-semibold py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-primary_main focus:ring-offset-2">
                            パスワードリセットリンクを送信
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

            <!-- Additional Help -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-lg font-Poppins font-bold text-gray-800 mb-3">
                    お困りの場合は
                </h3>
                <div class="space-y-3 text-sm font-Inter text-gray-600">
                    <div class="flex items-start">
                        <svg class="w-4 h-4 text-gray-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>メールが届かない場合は、迷惑メールフォルダもご確認ください</span>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-4 h-4 text-gray-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>リンクの有効期限は60分です</span>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-4 h-4 text-gray-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>それでも解決しない場合は、
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLScU1KrvLVJIMb_lOW6Ke3kDPJOlERlfC-wzWkCI9iJfuU3LAg/viewform" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="text-primary_main hover:text-primary_main/80 font-medium">
                                お問い合わせ
                            </a>
                            ください
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
