@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-9/12 mt-3 bg-white p-6 rounded-lg">
        <div class="mb-8">
            <a href="{{route('create_post')}}" class="bg-green-500 text-white p-4">Create New Post</a>
        </div>
        <h1 class="text-red">
            {{ session('deleted') }}</h1>
        {{ session('success') }}
        @if($posts->count())
        @foreach($posts as $item)
        <div class="mb-4">
            <a href="" class="font-bold">{{$item->title}}
                <p>Date :{{$item->created_at->diffForHumans()}} </p>
            </a>
            <small><a href="" class="font-bold">writen by : {{$item->user->name}}</a></small>
            <p class="mb-2">{{strlen($item->body) > 100 ? substr($item->body , 0 , 99 ) : $item->body }}</p>
            <a href="">Read More</a>
            <form action="{{route('post.delete',$item->id)}}" method="post">
                @csrf
                <button type="submit" class="bg-red-500 text-white d-block">DELETE THIS POST</button>
            </form>
            <div class="flex items-centered">
                <form action="{{route('posts.likes', $item->id)}}" method="post">
                    @csrf
                    <button type="submit" class="like-btn bg-green-600 p-2 px-3 text-white">Like</button>
                </form>
                <form action="" method="post">
                    @csrf
                    <button type="submit" class="like-btn bg-red-600 p-2 px-3 ml-3 text-white">Dislike</button>
                </form>
            </div>

            <span>{{ $item->likes->count() }} {{ Str::plural(' people like this post',$item->likes->count()) }}</span>
        </div>
        @endforeach
        {{$posts->links()}}
        @else
        <h1>No Post Found !</h1>
        @endif
    </div>
</div>
@endsection