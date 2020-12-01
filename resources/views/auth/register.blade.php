@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-6/12 mt-3 bg-white p-6 rounded-lg">
    <form action="{{route('register')}}" method="post">
            
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500  @enderror">
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">UserName</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500  @enderror">
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500  @enderror ">
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Choice Your Password" class="bg-gray-100 border-2 w-full @error('name') border-red-500  @enderror  p-4 rounded-lg">
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Repeat</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat Your Password" class=" @error('name') border-red-500  @enderror bg-gray-100 border-2 w-full p-4 rounded-lg">
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="submit" name="password_confirmation" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
            </div>

        </form>
    </div>
</div>
@endsection