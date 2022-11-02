<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index()
    {
        $todo = ToDo::all();
        return view('index', compact('todo'));
    }

    public function store()
    {
        $todo = request()->validate([
            'title' => 'required',
            'desc' => 'required'
        ]);

        ToDo::create($todo);
        return redirect('/');
    }

    public function update(ToDo $todo)
    {
        $todo->update(['isDone' => true]);
        return redirect('/');
    }

    public function destroy(ToDo $todo)
    {
        $todo->delete();
        return redirect('/');
    }
}
