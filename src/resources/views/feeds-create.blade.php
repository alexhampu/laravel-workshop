@extends('_layouts.app')

@section('page-title', 'Feeds')

@section('page-actions')
    <a href="{{ route('feeds.index') }}" class="text-white bg-primary hover:bg-primary-light py-2 px-4 rounded-lg flex items-center justify-center gap-1">
        <i class="fa-solid fa-list"></i>
        <span>Feeds list</span>
    </a>
@endsection

@section('content')
    <form action="{{ route('feeds.store') }}" method="post">
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
                <label for="url" class="block font-bold uppercase tracking-wide dark:text-white">URL</label>
                <input type="text" id="url" name="url" class="w-full py-4 px-8 rounded dark:bg-black/25 dark:text-white"/>
                @error('url')
                <p class="text-red-500 font-bold">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2">
                <label for="group_id" class="block font-bold uppercase tracking-wide dark:text-white">Group</label>
                <select id="group_id" name="group_id" class="w-full py-4 px-8 rounded dark:bg-black/25 dark:text-white">
                    @foreach($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
                @error('group_id')
                <p class="text-red-500 font-bold">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="py-2 px-8 bg-primary hover:bg-primary-light text-white uppercase font-bold tracking-wide text-lg rounded">Create</button>
        </div>
    </form>
@endsection