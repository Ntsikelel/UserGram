@extends('layouts.app')

@section('content')
<div class="container">
    <div class = "row">
        <div class ="col-3 p-6">
            <img src ="{{$user->profile->image}} ?? https://simpleicon.com/wp-content/uploads/user1.png"}} class = "rounded-circle">
        </div>
        <div class = "col-9 pt-5 justify-content-between ">
            <div class ="d-flex">
                <h1>{{$user->username}}</h1>
                 <a href ="post/create"><i class= "fa fa-plus">Post</i></a>
            </div>
            <div class ="d-flex">

                <div class = "pr-5">0 Posts</div>
                {{-- <div class = "pr-5">{{$user->posts->count}} Posts</div> --}}
            </div>
        </div>
    </div>
    <div class = "row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4">
            <img src ="storage/{{$post->image}}" class ="w-100">
        </div>
        @endforeach
    </div>
</div>
@endsection
