<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>論文詳細
    </title>
</head>

<body>
    <h1>論文詳細</h1>
    <p>{{ $task->title }}</p>
    <p>{!! nl2br(e($task->body)) !!}</p>
    <button onclick="location.href='{{ route('tasks.index') }}'">一覧に戻る</button>
    <button onclick="location.href='{{ route('tasks.edit', $task) }}'">編集する</button>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('tasks.destroy', $task) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">削除する</button>
</body>

</html>
