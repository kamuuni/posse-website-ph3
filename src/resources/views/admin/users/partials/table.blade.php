<table class="min-w-full table-auto">
    <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">名前</th>
            <th class="py-3 px-6 text-left">メールアドレス</th>
            <th class="py-3 px-6 text-center">登録日</th>
            <th class="py-3 px-6 text-center">アクション</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 text-sm font-light">
        @foreach ($users as $user)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left whitespace-nowrap">
                    {{ $user->id }}
                </td>
                <td class="py-3 px-6 text-left">
                    <span class="font-medium">{{ $user->name }}</span>
                </td>
                <td class="py-3 px-6 text-left">
                    {{ $user->email }}
                </td>
                <td class="py-3 px-6 text-center">
                    {{ $user->created_at->format('Y/m/d') }}
                </td>
                <td class="py-3 px-6 text-center">
                    {{-- typeがadminの場合は、一律で削除ボタンを出さない構造にする --}}
                    @if($type === 'admin')
                        <span class="text-gray-400 text-xs italic">Protected (Admin)</span>
                    @else
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('本当にこのユーザーを削除しますか？');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 font-bold">
                                削除
                            </button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
