@extends('_layouts.base', ['center' => true])

@section('content')
    <h1 class="text-4xl text-center dark:text-white">@yield('page-title')</h1>
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg w-full max-w-[800px] p-5 mx-auto">
        @yield('content')
    </div>
@overwrite
