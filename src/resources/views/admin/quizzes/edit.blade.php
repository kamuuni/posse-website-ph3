<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            クイズの編集
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

    <form action="{{ route('admin.quizzes.update', $quiz) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-medium text-gray-700">クイズ名</label>
            <input type="text" name="name" value="{{ old('name', $quiz->name) }}" class="text-black border-gray-300 rounded-md shadow-sm w-full">
        </div>

        <div id="questions-container">
            @php
                $displayQuestions = old('questions', $quiz->questions);
            @endphp

            @foreach($displayQuestions as $index => $question)
                <div class="question mt-8 p-4 border-t-2 border-gray-200">
                    <p class="font-bold text-lg mb-2">設問 {{ $index + 1 }}</p>

                    @php
                        if (is_array($question)) {
                            $qText = $question['text'];
                        } else {
                            $qText = $question->text;
                        }
                    @endphp

                    <label class="block text-sm font-medium text-gray-700">問題文</label>
                    <input type="text" name="questions[{{ $index }}][text]" value="{{ $qText }}" class="text-black border-gray-300 rounded-md shadow-sm w-full">

                    <div class="choices mt-4 ml-6">
                        @for ($i = 0; $i < 3; $i++)
                            @php
                                if (is_array($question)) {
                                    $cText = $question['choices'][$i]['text'] ?? '';
                                    $isCorrect = (isset($question['correct_index']) && $question['correct_index'] == $i);
                                } else {
                                    $cText = $question->choices[$i]->text ?? '';
                                    $isCorrect = $question->choices[$i]->is_correct;
                                }
                            @endphp

                            <div class="flex items-center mt-2">
                                <input type="text"
                                       name="questions[{{ $index }}][choices][{{ $i }}][text]"
                                       value="{{ $cText }}"
                                       placeholder="選択肢 {{ $i + 1 }}"
                                       class="text-black mr-2 border-gray-300 rounded-md shadow-sm flex-1">

                                <label class="flex items-center space-x-2">
                                    <input type="radio"
                                           name="questions[{{ $index }}][correct_index]"
                                           value="{{ $i }}"
                                           {{ $isCorrect ? 'checked' : '' }}
                                           class="text-indigo-600">
                                    <span class="text-sm text-gray-600 whitespace-nowrap">正解</span>
                                </label>
                            </div>
                        @endfor
                    </div>
                </div>
            @endforeach

            {{-- 作成画面と同じボタン --}}
            <button type="button" id="add-question-btn" class="mt-4 bg-gray-500 text-white px-4 py-2 rounded">設問を追加する</button>
        </div>


        <button type="submit" class="sticky bottom-0 w-full bg-blue-600 text-white font-bold py-2 px-4 rounded">更新を保存する</button>

    </form>

    @push('scripts')
        @vite(['resources/js/quiz-form.js'])
    @endpush
</x-admin-layout>
