<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8 text-gray-800">Latest Posts</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100 flex flex-col">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="w-full h-48 object-cover">
                    @endif

                    <div class="p-4 flex-grow">
                        <h2 class="text-xl font-bold mb-2">
                            <a href="{{ route('posts.show', $post->id) }}" class="hover:text-blue-600">
                                {{ $post->title }}
                            </a>
                        </h2>
                        <p class="text-gray-600 text-sm mb-4">
                            {{ Str::limit($post->body, 100) }}
                        </p>
                    </div>

                    {{-- ここをアップデート！投稿者と日時を横並びに --}}
                    <div class="px-4 py-3 bg-gray-50 border-t border-gray-100 flex justify-between items-center">
                        <div class="flex items-center">
                            {{-- 投稿者の名前を表示 --}}
                            <span class="text-xs font-medium text-gray-700">
                                By: {{ $post->user->name ?? 'Unknown' }}
                            </span>
                        </div>
                        <div class="text-xs text-gray-400">
                            {{ $post->created_at->format('M d, Y') }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
