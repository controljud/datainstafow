<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ListController extends Controller
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
        return view('lists.index');
    }

    public function create()
    {
        return view('lists.edit');
    }

    public function edit()
    {
        return view('lists.edit');
    }
}
