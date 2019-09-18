@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="/storage/{{ $user->profile->image}}" class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <div class="h4 pr-3">{{$user->username}}</div>
                        <button>   Follow</button>

                    </div>

                        <a href="/post/create">Add New Post</a>

                </div>

                    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>

                <div class="d-flex">
                    <div class="pr-5"><strong>{{$user->post->count()}} </strong> posts</div>
                    <div class="pr-5"><strong>2 </strong> followers</div>
                    <div class="pr-5"><strong>3 </strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{$user->profile->description}}</div>
                <div><a href="#">{{$user->profile->url}}</a></div>
            </div>
        </div>

        <div class="row pt-5">
            @foreach($user->post as $post)
                <div class="col-4 pb-4">
                    <a href="/post/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
