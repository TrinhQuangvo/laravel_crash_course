@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-9/12 mt-3 bg-white p-6 rounded-lg">
        <form action="{{route('posts')}}" method="post">
            @csrf
            <h1 class="my-3 ">New Post</h1>
            <div class="mb-4">
                <label for="title" class="sr-only">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="titlle" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500  @enderror">
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="body" class="sr-only">Content</label>
                <textarea name="body" cols="30" rows="4" id="body" value="{{ old('body') }}" placeholder="body" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500  @enderror">

                </textarea>
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="submit" name="post" value="Create New Post" class="bg-green-600 text-white border-2 w-full p-4 rounded-lg">
            </div>
        </form>
    </div>
</div>
@endsection