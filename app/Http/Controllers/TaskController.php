<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('createTask');
    }

    public function create()
    {
        $this->valid();
        Task::create([
            'title'=> request()->title,
            'desc' => request()->desc,
            'hard' => 2
        ]);
       return redirect(route('tasks'));
    }

    public function delete(Task $task)
    {
        $task->delete();
        return redirect('/');
    }

    public function edit(Task $task)
    {
        return view('editTask', compact('task'));
    }
    public function update(Task $task)
    {
        $this->valid();
        $task->update([
            'title' => request()->title,
            'desc' => request()->desc,
        ]);
        return redirect('/');
    }

    private function valid(){
        request()->validate([
            'title' => ['required', 'string', 'max:40'],
            'desc' => ['required','string','min:5']
        ]);
    }
}
