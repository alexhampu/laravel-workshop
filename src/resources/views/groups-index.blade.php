@extends('_layouts.app')

@section('page-title', 'Feeds')

@section('page-actions')
    @if(Route::has('groups.create'))
        <a href="{{ route('groups.create') }}"
           class="text-white bg-primary hover:bg-primary-light py-2 px-4 rounded-lg flex items-center justify-center gap-1">
            <i class="fa-solid fa-plus"></i>
            <span>Create group</span>
        </a>
    @endif

    @if(Route::has('feeds.create'))
        <a href="{{ route('feeds.create') }}"
           class="text-white bg-primary hover:bg-primary-light py-2 px-4 rounded-lg flex items-center justify-center gap-1">
            <i class="fa-solid fa-plus"></i>
            <span>Create feed</span>
        </a>
    @endif
@endsection

@section('content')
    @if(!empty($groups) && $groups->count())
        <div class="space-y-8">
            @foreach($groups as $group)
                <div class="space-y-4">
                    <div class="uppercase font-bold tracking-wide">{{ $group->name }}</div>

                    @if($group->feeds->count())
                    <div class="grid grid-cols-3 gap-5">
                        @foreach($group->feeds as $feed)
                            <div class="border-2 border-primary p-4 space-y-4 rounded-lg">
                                <div class="text-center">
                                    <p>{{ $feed->name }}</p>
                                    <small>{{ $feed->url }}</small>
                                </div>

                                @if(Route::has('feeds.destroy'))
                                    <div class="flex gap-2">
                                        <form action="{{ route('feeds.destroy', $feed->id) }}" method="POST" class="m-0 p-0">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="py-2 px-8 text-primary-light hover:text-primary text-white uppercase font-bold tracking-wide text-lg rounded w-full">
                                                <i class="fa-solid fa-trash"></i>
                                                <span>Delete</span>
                                            </button>
                                        </form>
                                        <div>
                                            <a href="{{ route('feeds.show', $feed->id) }}" class="block py-2 px-8 bg-primary hover:bg-primary-light text-white uppercase font-bold tracking-wide text-lg rounded w-full">Open</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    @else
                        <p>No feeds have been created.</p>
                    @endif
                </div>
            @endforeach
        </div>
    @else
        <p>There are no groups created yet.</p>
    @endif
@endsection
