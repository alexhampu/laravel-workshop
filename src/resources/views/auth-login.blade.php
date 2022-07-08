@extends('_layouts.auth')

@section('page-title', 'Login')

@section('content')
    <form action="{{ route('do-login') }}" method="post">
        @csrf
        <div class="space-y-4">
            <div class="space-y-2">
                <label for="email" class="block font-bold uppercase tracking-wide dark:text-white">Email address</label>
                <input type="text" id="email" name="email" class="w-full py-4 px-8 rounded border-2 border-primary dark:border-0 dark:bg-black/25 dark:text-white" value="{{ old('email') }}"/>
                @error('email')
                <p class="text-red-500 font-bold">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2">
                <label for="password" class="block font-bold uppercase tracking-wide dark:text-white">Password</label>
                <input type="password" id="password" name="password" class="w-full py-4 px-8 rounded border-2 border-primary dark:border-0 dark:bg-black/25 dark:text-white"/>
                @error('password')
                <p class="text-red-500 font-bold">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="py-2 px-8 bg-primary hover:bg-primary-light text-white uppercase font-bold tracking-wide text-lg rounded">Login</button>
        </div>
    </form>
@endsection
