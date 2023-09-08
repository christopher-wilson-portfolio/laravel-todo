<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        $tasks = [
            '1' => ['name' => 'Blah'],
            '2' => ['name' => 'Foo'],
        ];

        return view('todo', ['tasks' => $tasks]);
    }

    public function saveTask(Request $task_data) {
        var_dump($task_data);

        return redirect('index')->with('message', 'New Todo Saved');
    }

    public function updateTasks($data): void {
        var_dump($data);
    }
}
