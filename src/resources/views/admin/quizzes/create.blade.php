<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            新しいクイズを作成
        </h2>
    </x-slot>
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
        <input type="text" name="name" value="{{ old('name') }}" placeholder="例：IT基礎クイズ">

        <hr>

        <div class="question-container">
            <div class="question">
                <label>設問 1</label>
                <input type="text" name="questions[0][text]" value="{{ old('questions.0.text') }}" placeholder="問題文">

                <div class="choices" style="margin-left: 20px;">
                    @for ($i = 0; $i < 3; $i++)
                        <div>
                            <input type="text" name="questions[0][choices][{{ $i }}][text]" value="{{ old("questions.0.choices.$i.text") }}" placeholder="選択肢 {{ $i + 1 }}">
                            <label>
                                <input type="radio" name="questions[0][correct_index]" value="{{ $i }}" {{ $i == 0 ? 'checked' : '' }}>正解
                            </label>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <button type="button">設問を追加する</button>

        <button type="submit">保存する</button>
    </form>
</x-admin-layout>
