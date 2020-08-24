<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function _construct()
    {
            $this->middleware('auth');
    }
    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('posts.indexpost',[
            'user'=> $user,
        ]);
    }
    public function create()
    {
        return view('posts.createpost');
    }
    public function show($user)
    {
        $user = User::findOrFail($user);
        return view('posts.showpost',[
            'user'=> $user,
        ]);
    }
    public function edit($user)
    {
        $user = User::findOrFail($user);
        return view('posts.editpost',[
            'user'=> $user,
        ]);
    }
    public function store(Request $req)
    {
        $req->validate
         ([
                ''=>['required'],
                ''=>['required'],
                ''=>['required'],
          ]);
        Post::create($req->all());
        // auth()->user()->post()-create($data0);
        return redirect()->route('post.showpost')->with('success','Post created successfully');
    }
    public function update(Request $req , Post $post)
    {
         $req->validate
         ([
                ''=>['required'],
                ''=>['required'],
                ''=>['required'],
          ]);
        $post->update($req->all());
        return redirect()->route('post.showpost')->with('success','Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('profile.showprofile')->with('success','Post deleted successfully');
    }

    // public function store()
    // {
    //     $data = request()->validate([
    //         'caption'=>'required',
    //         'image'=>['required','image'],
    //     ]);
    // }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'caption'=>['required', 'string', 'min:8'],
    //         'image' => ['required','image'],
    //     ]);
    // }

    //  protected function create(array $data)
    //  {
    //      return User::create([
    //          '' => $data[''],
    //      ]);
    //  }
}
