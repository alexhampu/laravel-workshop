@extends('_layouts.app')

@section('page-title', 'Tokens')

@section('page-actions')
    <a href="{{ route('tokens.create') }}"
       class="text-white bg-primary hover:bg-primary-light py-2 px-4 rounded-lg flex items-center justify-center gap-1">
        <i class="fa-solid fa-plus"></i>
        <span>Create token</span>
    </a>
@endsection

@section('content')
    @if(!empty($tokens) && $tokens->count())
        <div class="grid grid-cols-3 gap-5">
            @foreach($tokens as $token)
                <div class="border-2 border-primary p-4 space-y-4 rounded-lg">
                    <div class="text-center">
                        <p>{{ $token->name }}</p>
                        <small>{{ $token->created_at->diffForHumans() }}</small>
                    </div>

                    <form action="{{ route('tokens.destroy', $token->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="py-2 px-8 bg-primary hover:bg-primary-light text-white uppercase font-bold tracking-wide text-lg rounded w-full">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    @else
        <p>There are no tokens created yet.</p>
    @endif
@endsection
