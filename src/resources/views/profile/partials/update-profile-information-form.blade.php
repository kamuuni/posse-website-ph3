<section>
    <div class="mb-6">
        <p class="text-gray-600 font-Inter text-sm">
            アカウントの基本情報とメールアドレスを更新できます。
        </p>
    </div>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('patch')

        <div>
            <label for="name" class="block text-sm font-Inter font-medium text-gray-700 mb-2">
                お名前
            </label>
            <input id="name" 
                   name="name" 
                   type="text" 
                   value="{{ old('name', $user->name) }}" 
                   required 
                   autofocus 
                   autocomplete="name"
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary_main focus:border-primary_main transition-colors duration-200 font-Inter">
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <label for="email" class="block text-sm font-Inter font-medium text-gray-700 mb-2">
                メールアドレス
            </label>
            <input id="email" 
                   name="email" 
                   type="email" 
                   value="{{ old('email', $user->email) }}" 
                   required 
                   autocomplete="username"
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary_main focus:border-primary_main transition-colors duration-200 font-Inter">
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-3 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                    <p class="text-sm text-yellow-800 font-Inter">
                        メールアドレスが未認証です。

                        <button form="send-verification" class="underline text-yellow-700 hover:text-yellow-900 font-medium transition-colors duration-200">
                            認証メールを再送信する
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 font-Inter">
                            新しい認証リンクがメールアドレスに送信されました。
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4 pt-4">
            <button type="submit" 
                    class="bg-primary_main hover:bg-primary_main/90 text-white font-Inter font-semibold py-3 px-6 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-primary_main focus:ring-offset-2">
                保存する
            </button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }"
                   x-show="show"
                   x-transition
                   x-init="setTimeout(() => show = false, 2000)"
                   class="text-sm text-green-600 font-Inter font-medium">
                    保存されました。
                </p>
            @endif
        </div>
    </form>
</section>
