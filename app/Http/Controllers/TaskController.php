<?php

namespace App\Http\Controllers;

// Taskモデルを呼び出す
use App\Models\Tasks;
use Illuminate\Http\Request;

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
    public function store()
    {
        // Tasksモデルをインスタンス化
        $task = new Tasks;
        // タイトルを代入
        $task->title = request('title');
        // 本文を代入
        $task->body = request('body');
        // インスタンスを保存
        $task->save();
        // tasks.indexビューにリダイレクト
        return redirect('/tasks');
    }



    // showメソッドを定義
    public function show($id)
    {
        $task = Tasks::find($id);
        return view('tasks.show', ['task' => $task]);
}
}
