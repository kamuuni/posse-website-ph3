<x-admin-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-8">ユーザー管理</h1>

        {{-- 管理者一覧 --}}
        <section class="mb-12">
            <h2 class="text-xl font-semibold mb-4 text-blue-700 flex items-center">
                <span class="mr-2">🛡️</span> 管理者
            </h2>
            <div class="bg-white shadow-md rounded overflow-hidden">
                @include('admin.users.partials.table', ['users' => $admins, 'type' => 'admin'])
            </div>
        </section>

        {{-- 一般ユーザー一覧 --}}
        <section>
            <h2 class="text-xl font-semibold mb-4 text-blue-700 flex items-center">
                <span class="mr-2">👤</span> 一般ユーザー
            </h2>
            <div class="bg-white shadow-md rounded overflow-hidden">
                @include('admin.users.partials.table', ['users' => $users, 'type' => 'user'])
            </div>
        </section>
    </div>
</x-admin-layout>
