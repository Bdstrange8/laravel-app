@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="pb-2">
            <div class="card p-2">
                <div class="row">
                    <div class="col-md-3 col-sm-3 rounded ">
                        <img class="img-thumbnail" style="height:auto" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}" style="color: #269171"> {{$post->title}} </a> </h3>
                        <small> Written on {{$post->created_at}} by {{$post->user->name}}</small>   
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div> {{$posts->links('pagination::bootstrap-4')}} </div>
    @else
        <p> No posts found </p>
    @endif
@endsection