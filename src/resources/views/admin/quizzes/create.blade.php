<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            新しいクイズを作成
        </h2>
    </x-slot>

    {{-- バリデーションエラー表示 --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.quizzes.store') }}" method="POST">
        @csrf

        <label>クイズ名</label>
        <input type="text" name="name" value="{{ old('name') }}" placeholder="例：IT基礎クイズ" class="text-black">

        <div id="questions-container">
            <div class="question mt-8 p-4 border-t-2 border-gray-200">
                {{-- タイトル --}}
                <p class="font-bold text-lg mb-2">設問 1</p>

                {{-- 問題文 --}}
                <label class="block text-sm font-medium text-gray-700">問題文</label>
                <input type="text" name="questions[0][text]"
                    value="{{ old('questions.0.text') }}"
                    placeholder="問題を入力"
                    class="text-black mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>

                {{-- 選択肢 --}}
                <div class="choices mt-4 ml-6">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="flex items-center mt-2">
                            <input type="text" name="questions[0][choices][{{ $i }}][text]"
                                value="{{ old("questions.0.choices.$i.text") }}"
                                placeholder="選択肢 {{ $i + 1 }}"
                                class="text-black mr-2 block w-full border-gray-300 rounded-md shadow-sm" required>

                            <label class="flex items-center space-x-2">
                                <input type="radio" name="questions[0][correct_index]" value="{{ $i }}"
                                    {{ old("questions.0.correct_index", "0") == $i ? 'checked' : '' }}
                                    class="text-indigo-600">
                                <span class="text-sm text-gray-600 whitespace-nowrap">正解</span>
                            </label>
                        </div>
                    @endfor
                </div>
            </div>
            @if(old('questions'))
                @foreach(old('questions') as $index => $question)
                    @if($index == 0) @continue @endif {{-- 1問目は上で書いてるので飛ばす --}}

                    <div class="question mt-8 p-4 border-t-2 border-gray-200">
                        {{-- タイトル：$indexは0から始まるので +1 して表示 --}}
                        <p class="font-bold text-lg mb-2">設問 {{ $index + 1 }}</p>

                        {{-- 問題文 --}}
                        <label class="block text-sm font-medium text-gray-700">問題文</label>
                        <input type="text"
                            name="questions[{{ $index }}][text]"
                            value="{{ old("questions.$index.text") }}"
                            placeholder="問題を入力"
                            class="text-black mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>

                        <div class="choices mt-4 ml-6">
                            {{-- 選択肢のループ（3つ） --}}
                            @for ($i = 0; $i < 3; $i++)
                                <div class="flex items-center mt-2">
                                    <input type="text"
                                        name="questions[{{ $index }}][choices][{{ $i }}][text]"
                                        value="{{ old("questions.$index.choices.$i.text") }}"
                                        placeholder="選択肢 {{ $i + 1 }}"
                                        class="text-black mr-2 block w-full border-gray-300 rounded-md shadow-sm" required>

                                    <label class="flex items-center space-x-2">
                                        {{-- ラジオボタン：oldの値と現在の $i が一致したらチェック --}}
                                        <input type="radio"
                                            name="questions[{{ $index }}][correct_index]"
                                            value="{{ $i }}"
                                            {{ old("questions.$index.correct_index") == $i ? 'checked' : '' }}
                                            class="text-indigo-600">
                                        <span class="text-sm text-gray-600 whitespace-nowrap">正解</span>
                                    </label>
                                </div>
                            @endfor
                        </div>
                    </div>
                @endforeach
            @endif
            <button type="button" id="add-question-btn">設問を追加する</button>
        </div>

        <button type="submit" class="sticky bottom-0">保存する</button>
    </form>

    @push('scripts')
        @vite(['resources/js/quiz-form.js'])
    @endpush

</x-admin-layout>
