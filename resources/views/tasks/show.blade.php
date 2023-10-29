<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <a href="{{ route('tasks.index') }}">戻る</a>
    <h1>{{ $task->title }}</h1>
    <p>{!!  nl2br(e($task->body)) !!}</p>
</body>
</html>
