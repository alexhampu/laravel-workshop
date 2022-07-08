@extends('_layouts.auth')

@section('page-title', 'Register')

@section('content')
    <form action="{{ route('do-register') }}" method="post">
        @csrf
        <div class="space-y-4">
            <div class="space-y-2">
                <label for="name" class="block font-bold uppercase tracking-wide dark:text-white">Name</label>
                <input type="text" id="name" name="name" class="w-full py-4 px-8 rounded dark:bg-black/25 dark:text-white"/>
                @error('name')
                <p class="text-red-500 font-bold">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2">
                <label for="email" class="block font-bold uppercase tracking-wide dark:text-white">Email address</label>
                <input type="text" id="email" name="email" class="w-full py-4 px-8 rounded dark:bg-black/25 dark:text-white"/>
                @error('email')
                <p class="text-red-500 font-bold">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2">
                <label for="password" class="block font-bold uppercase tracking-wide dark:text-white">Password</label>
                <input type="password" id="password" name="password" class="w-full py-4 px-8 rounded dark:bg-black/25 dark:text-white"/>
                @error('password')
                <p class="text-red-500 font-bold">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2">
                <label for="password_confirmation" class="block font-bold uppercase tracking-wide dark:text-white">Confirm password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full py-4 px-8 rounded dark:bg-black/25 dark:text-white"/>
                @error('password_confirmation')
                <p class="text-red-500 font-bold">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="py-2 px-8 bg-primary hover:bg-primary-light text-white uppercase font-bold tracking-wide text-lg rounded">Register</button>
        </div>
    </form>
@endsection
