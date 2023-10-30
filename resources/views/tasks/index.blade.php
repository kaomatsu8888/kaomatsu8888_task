<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>論文一覧</title>
</head>

<body>
    <h1>論文一覧</h1>
    @foreach ($tasks as $task)
        <p><a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a></p>
    @endforeach

    <button onclick="location.href='{{ route('tasks.create') }}'">新規論文投稿</button>
</body>

</html>
