@extends('_layouts.app')

@section('page-title', 'Groups')

@section('page-actions')
    <a href="{{ route('groups.index') }}" class="text-white bg-primary hover:bg-primary-light py-2 px-4 rounded-lg flex items-center justify-center gap-1">
        <i class="fa-solid fa-list"></i>
        <span>Groups list</span>
    </a>
@endsection

@section('content')
    <form action="{{ route('groups.store') }}" method="post">
        @csrf
        <div class="space-y-4">
            <div class="space-y-2">
                <label for="name" class="block font-bold uppercase tracking-wide dark:text-white">Name</label>
                <input type="text" id="name" name="name" class="w-full py-4 px-8 rounded dark:bg-black/25 dark:text-white"/>
                @error('name')
                <p class="text-red-500 font-bold">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="py-2 px-8 bg-primary hover:bg-primary-light text-white uppercase font-bold tracking-wide text-lg rounded">Create</button>
        </div>
    </form>
@endsection
