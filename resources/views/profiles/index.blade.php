@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class = "col-3 p-5">
            <img src="/storage/{{$user->profile->image}}" class="rounded-circle w-100">
        </div>

        <div class = "col-9 p-5">
            <div class = 'd-flex justify-content-between align-items-baseline'>
                <h1>{{ $user->username}}</h1>
                @can('update',$user->profile) {{--authorizing the link--}}
                <a href = '/p/create'>Add New Post</a>
                @endcan
                
            </div>


            @can('update',$user->profile) {{--authorizing the link--}}
                <a href="/profile/{{$user -> id}}/edit">Edit profile</a>
            @endcan

            <div class = "d-flex">
                <div class = "pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class = "pr-5"><strong>67.1k</strong> followers</div>
                <div class = "pr-5"><strong>301</strong> following</div>
            </div>
            <div class = "pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">

        @foreach($user->posts as $posts) {{--importing all posts of user from posts--}}
        <div class="col-4 pb-4">
            <a href="/p/{{$posts->id}}">
                <img src="/storage/{{ $posts->image}}" class="w-100">
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection
