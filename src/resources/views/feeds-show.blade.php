@extends('_layouts.app')

@section('page-title', $feed->name)

@section('page-actions')
    <a href="{{ route('groups.index') }}" class="text-white bg-primary hover:bg-primary-light py-2 px-4 rounded-lg flex items-center justify-center gap-1">
        <i class="fa-solid fa-list"></i>
        <span>Group list</span>
    </a>
@endsection

@section('content')
    @if($feed)
        <div class="space-y-8">
            <div class="space-y-4">
                <div>{{ count($posts) }} posts available</div>

                <div class="grid grid-cols-3 gap-5">
                    @foreach($posts as $post)
                        <div class="border-2 border-primary p-4 space-y-4 rounded-lg">
                            <div class="text-center">
                                <p>{{ $post->title }}</p>
                                <small>{{ $post->pubDate }}</small>
                            </div>

                            <a href="{{ $post->link }}" target="_blank"
                               class="block py-2 px-8 bg-primary hover:bg-primary-light text-white uppercase font-bold tracking-wide text-lg rounded w-full text-center">Open</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p>There are no groups created yet.</p>
    @endif
@endsection
