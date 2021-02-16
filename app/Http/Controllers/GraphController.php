<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    private $user;

    public function __construct(Request $request)
    {
        $this->user =  Auth::user();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('graphs.index');
    }

    public function create()
    {
        return view('graphs.edit');
    }

    public function edit()
    {
        return view('graphs.edit');
    }
}
