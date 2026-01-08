<x-app-layout>
                <div class="p-6 text-gray-900">
                    <p>現在登録されているユーザーの一覧です。</p>

                    <table class="table-auto w-full mt-4">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">名前</th>
                                <th class="px-4 py-2">メールアドレス</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr class="border-b">
                                    <td class="px-4 py-2">{{ $user->id }}</td>
                                    <td class="px-4 py-2">{{ $user->name }}</td>
                                    <td class="px-4 py-2">{{ $user->email }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="border px-4 py-2 text-center">ユーザーはまだいません。</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
</x-app-layout>