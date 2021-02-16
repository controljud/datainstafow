<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    private $profile;
    private $user;

    public function __construct(Request $request)
    {
        $this->profile = new Profile;
        $this->user =  Auth::user();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profiles = $this->profile::join('user_profiles', 'user_profiles.idProfile', 'profiles.idProfile')
            ->where('user_profiles.idUser', 1);
        
        return view('profiles.index')
            ->with('profiles', $profiles)
            ->with('user', $this->user);
    }

    public function create()
    {
        return view('profiles.edit');
    }

    public function edit()
    {

    }
}
