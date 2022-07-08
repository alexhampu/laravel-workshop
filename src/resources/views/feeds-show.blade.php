@extends('_layouts.app')

@section('page-title', 'Feeds')

@section('content')
    @if($feed)
        <div class="space-y-8">
            <div class="space-y-4">
                <div>{{ $feed->name }}</div>

                <div class="grid grid-cols-3 gap-5">
                    @foreach($posts as $post)
                        <div class="border-2 border-primary p-4 space-y-4 rounded-lg">
                            <div class="text-center">
                                <p>{{ $post->title }}</p>
                                <small>{{ $feed->category }}</small>
                            </div>

                            @if(Route::has('feeds.destroy'))
                                <div class="flex gap-2">
                                    <div>
                                        <a href="{{ $feed->link }}" class="block py-2 px-8 bg-primary hover:bg-primary-light text-white uppercase font-bold tracking-wide text-lg rounded w-full">Open</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p>There are no groups created yet.</p>
    @endif
@endsection
