<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        投稿論文編集
    </title>
</head>

<body>
    <h1>投稿論文編集</h1>

    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">論文タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" id="body">{{ old('body', $task->body) }}}</textarea>
        </p>
        <input type="submit" value="更新">
    </form>
</body>

</html>
