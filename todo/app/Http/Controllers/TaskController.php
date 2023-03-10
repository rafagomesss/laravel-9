<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(Request $request)
    {
    }

    public function create(Request $request)
    {
        $categories = Category::all();
        $data['categories'] = $categories;
        return view('tasks.create', $data);
    }

    public function create_action(Request $request)
    {
        $task = $request->only(['title', 'description', 'due_date', 'category_id']);
        $task['user_id'] = 1;
        Task::create($task);
        return redirect(route('home'));
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $task = Task::find($id);
        if (empty($task)) {
            return redirect(route('home'));
        }
        $data['task'] = $task;
        $categories = Category::all();
        $data['categories'] = $categories;
        return view('tasks.edit', $data);
    }

    public function edit_action(Request $request)
    {
        $request_data = $request->only([
            'title', 'due_date', 'category_id', 'description',
        ]);

        $request_data['is_done'] = $request->is_done ? true : false;

        $task = Task::find($request->id);
        if (empty($task)) {
            return redirect(route('home'));
        }

        $task->update($request_data);
        $task->save();
        return redirect(route('home'));
    }

    public function delete(Request $request)
    {
        // Deleta e redireciona de volta para Home
        $id = $request->id;
        $task = Task::find($id);
        if (!empty($task)) {
            $task->delete();
        }
        return redirect(route('home'));
    }

    public function all(Request $request)
    {
        if (!empty($request->id)) {
            return Task::find($request->id);
        }
        return Task::all();
    }
}
