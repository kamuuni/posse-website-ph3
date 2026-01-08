<section class="space-y-6">
    <div class="mb-6">
        <p class="text-gray-600 font-Inter text-sm">
            アカウントを削除すると、すべてのリソースとデータが完全に削除されます。削除する前に、保持したいデータや情報をダウンロードしてください。
        </p>
    </div>

    <button type="button"
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            class="bg-red-500 hover:bg-red-600 text-white font-Inter font-semibold py-3 px-6 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
        アカウントを削除
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <div class="flex items-center mb-4">
                <svg class="w-8 h-8 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                </svg>
                <h2 class="text-xl font-Poppins font-bold text-gray-900">
                    アカウントを削除しますか？
                </h2>
            </div>

            <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6">
                <p class="text-sm text-red-800 font-Inter">
                    <strong>警告:</strong> アカウントを削除すると、すべてのリソースとデータが完全に削除されます。この操作は取り消すことができません。
                </p>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-Inter font-medium text-gray-700 mb-2">
                    確認のためパスワードを入力してください
                </label>
                <input id="password"
                       name="password"
                       type="password"
                       placeholder="パスワード"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors duration-200 font-Inter">
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end space-x-3">
                <button type="button" 
                        x-on:click="$dispatch('close')"
                        class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-Inter font-medium py-2 px-4 rounded-lg transition-colors duration-200">
                    キャンセル
                </button>
                <button type="submit"
                        class="bg-red-500 hover:bg-red-600 text-white font-Inter font-semibold py-2 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                    アカウントを削除
                </button>
            </div>
        </form>
    </x-modal>
</section>
