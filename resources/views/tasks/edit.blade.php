<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>新規タスク投稿</h1>
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
    <form action="{{ route('tasks.update', $task) }}" method="post" style="display: inline-block;">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label>
        </p>
        <input type="text" name="title" id="title" value="{{ $task->title }}">
        <p>
            <label for="body">内容</label>
        </p>
        <textarea name="body" class="body" id="body">{{ $task->body }}</textarea>
        <br>
        <input type="submit" value="更新">
    </form>
        <button onclick="location.href='{{ route('tasks.show', $task) }}'" style="display: inline-block; margin-left:-120px;">詳細に戻る</button>
</body>

</html>
