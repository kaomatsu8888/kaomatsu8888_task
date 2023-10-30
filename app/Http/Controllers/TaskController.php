<?php

namespace App\Http\Controllers;

// Taskモデルを呼び出す
use App\Models\Tasks;
use Termwind\Components\Raw;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    // indexメソッドを定義
    public function index()
    {   // Tasksテーブルの全てのデータを取得
        $tasks = Tasks::all();
        // tasks.indexビューを表示
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    // storeメソッドを定義
    public function store(TaskRequest $request)
    {
        // Tasksモデルをインスタンス化
        $task = new Tasks();
        // タイトルを代入
        $task->title = request('title');
        // 本文を代入
        $task->body = request('body');
        // インスタンスを保存
        $task->save();
        // tasks.indexビューにリダイレクト
        return redirect(route('tasks.index'));
    }



    // showメソッドを定義
    public function show($id)
    {
        $task = Tasks::findOrFail($id);
        return view('tasks.show', ['task' => $task]);
    }
    // editメソッドを定義
    public function edit($id)
    {
        $task = Tasks::find($id);
        return view('tasks.edit', ['task' => $task]);
    }
    // updateメソッドを定義
    public function update(TaskRequest $request, $id)
    {
        $task = Tasks::find($id);
        $task->title = $request->title;
        $task->body = $request->body;
        $task->save();
        return redirect(route('tasks.index'));
    }

    // destroyメソッドを定義
    public function destroy($id)
    {
        $task = Tasks::find($id);
        $task->delete();
        return redirect(route('tasks.index'));
    }
}
