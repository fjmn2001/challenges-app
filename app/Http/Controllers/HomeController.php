<?php

namespace App\Http\Controllers;

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
        return view('home');
    }

    public function show($id)
    {
        return view('task',[
            'id' => $id
        ]);
    }

    public function create()
    {
        return view('new_task');
    }

    public function store(Request $request)
    {
        dd($request->all());
        return view('new_task');
    }
}
