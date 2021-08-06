<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',[
            'tasks' => Task::orderBy('id', 'desc')->get(),
        ]);
    }

    public function show($id)
    {
        return view('task',[
            'task' => Task::find($id),
        ]);
    }

    public function create()
    {
        return view('new_task');
    }
}
