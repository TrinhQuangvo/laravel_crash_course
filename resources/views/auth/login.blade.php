@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-6/12 mt-3 bg-white p-6 rounded-lg">

        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500  @enderror ">
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="text" name="password" id="password" placeholder="Choice Your Password" class="bg-gray-100 border-2 w-full @error('name') border-red-500  @enderror  p-4 rounded-lg">
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            @if(session('status'))
            <div class="p-1 rounded-lg mb-3 text-danger">
                {{session('status')}}
            </div>
            @endif
            <div class="mb-4">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </div>
            <div class="mb-4">
                <input type="submit" value="Login" class="bg-green-500 border-2 text-white w-full p-4 rounded-lg">
            </div>

        </form>
    </div>
</div>
@endsection