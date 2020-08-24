<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    // public function _contruct()
    // {
    //     $this->middleware('guest');
    // }
    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('home',[
            'user'=> $user,
        ]);
    }
    public function create()
    {
        return view('profiles.createprofile');
    }
    public function show($user)
    {
        $user = User::findOrFail($user);
        return view('profiles.viewprofile',[
            'user'=> $user,
        ]);
    }
    public function edit($user)
    {
        $user = User::findOrFail($user);
        return view('profiles.editprofile',[
            'user'=> $user,
        ]);
    }
    public function store()
    {
        $req->validate
         ([
                ''=>['required'],
                ''=>['required'],
                ''=>['required'],
          ]);
        Profile::create($req->all());
        // auth()->user()->post()-create($data0);
        return redirect()->route('profile.showprofile')->with('success','Profile created successfully');
    }
    public function update(Request $req,Profile $profile)
    {
        $req->validate
        ([
               ''=>['required'],
               ''=>['required'],
               ''=>['required'],
         ]);
       $post->update($req->all());
       return redirect()->route('profile.showprofile')->with('success','Profile updated successfully');
    }

    public function destroy(Profile $profile)
    {
        $user->delete();
        return redirect()->route('profile.showprofile')->with('success','Profile deleted successfully');
    }
}
