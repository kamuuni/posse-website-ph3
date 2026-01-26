<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.quizzes.index') }}" 
               class="text-gray-400 hover:text-gray-600 transition-colors duration-200">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                クイズの編集
            </h2>
        </div>
    </x-slot>

    <div class="max-w-4xl mx-auto">
        <!-- バリデーションエラー表示 -->
        @if ($errors->any())
            <div class="mb-6 bg-red-50 border border-red-200 rounded-lg p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">入力内容に問題があります</h3>
                        <div class="mt-2 text-sm text-red-700">
                            <ul class="list-disc list-inside space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <form action="{{ route('admin.quizzes.update', $quiz) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- クイズ名入力 -->
            <div class="bg-white shadow rounded-lg p-6">
                <div class="mb-4">
                    <label for="quiz-name" class="block text-sm font-medium text-gray-700 mb-2">
                        クイズ名 <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           id="quiz-name"
                           name="name" 
                           value="{{ old('name', $quiz->name) }}" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                           required>
                    <p class="mt-1 text-sm text-gray-500">わかりやすいクイズ名を入力してください。</p>
                </div>
            </div>

            <!-- 問題セクション -->
            <div class="bg-white shadow rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-medium text-gray-900">問題設定</h3>
                        <span class="text-sm text-gray-500">最大10問まで</span>
                    </div>
                </div>

                <div class="p-6">
                    <div id="questions-container">
                        @php
                            $displayQuestions = old('questions', $quiz->questions);
                        @endphp

                        @foreach($displayQuestions as $index => $question)
                            <div class="question {{ $index > 0 ? 'mt-6' : '' }} border border-gray-200 rounded-lg p-6 bg-gray-50">
                                <div class="flex items-center justify-between mb-4">
                                    <h4 class="text-lg font-semibold text-gray-900">問題 {{ $index + 1 }}</h4>
                                    @if($index > 0)
                                        <button type="button" class="remove-question text-red-600 hover:text-red-800 text-sm font-medium">
                                            削除
                                        </button>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            必須
                                        </span>
                                    @endif
                                </div>

                                @php
                                    if (is_array($question)) {
                                        $qText = $question['text'];
                                    } else {
                                        $qText = $question->text;
                                    }
                                @endphp

                                <!-- 問題文 -->
                                <div class="mb-6">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        問題文 <span class="text-red-500">*</span>
                                    </label>
                                    <textarea name="questions[{{ $index }}][text]"
                                              rows="3"
                                              class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                              required>{{ $qText }}</textarea>
                                </div>

                                <!-- 選択肢 -->
                                <div class="space-y-4">
                                    <label class="block text-sm font-medium text-gray-700">
                                        選択肢 <span class="text-red-500">*</span>
                                    </label>
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

                                        <div class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg bg-white">
                                            <div class="flex-shrink-0">
                                                <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-gray-100 text-sm font-medium text-gray-500">
                                                    {{ chr(65 + $i) }}
                                                </span>
                                            </div>
                                            <input type="text" 
                                                   name="questions[{{ $index }}][choices][{{ $i }}][text]"
                                                   value="{{ $cText }}"
                                                   placeholder="選択肢 {{ $i + 1 }}"
                                                   class="flex-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                                   required>
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="radio" 
                                                       name="questions[{{ $index }}][correct_index]" 
                                                       value="{{ $i }}"
                                                       {{ $isCorrect ? 'checked' : '' }}
                                                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                                <span class="text-sm font-medium text-gray-700">正解</span>
                                            </label>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- 問題追加ボタン -->
                    <div class="mt-6 text-center">
                        <button type="button" 
                                id="add-question-btn"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <svg class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            問題を追加する
                        </button>
                    </div>
                </div>
            </div>

            <!-- 保存ボタン -->
            <div class="sticky bottom-0 bg-white border-t border-gray-200 px-6 py-4 shadow-lg">
                <div class="flex items-center justify-between">
                    <a href="{{ route('admin.quizzes.index') }}" 
                       class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        キャンセル
                    </a>
                    <button type="submit" 
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        更新を保存する
                    </button>
                </div>
            </div>
        </form>
    </div>

    @push('scripts')
        @vite(['resources/js/quiz-form.js'])
    @endpush
</x-admin-layout>
