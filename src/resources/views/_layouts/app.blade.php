@extends('_layouts.base')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 py-10 space-y-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <div>
                <h1 class="text-4xl text-center dark:text-white">@yield('page-title')</h1>
            </div>
            <div class="flex-1 flex items-center justify-end gap-2">
                @yield('page-actions')
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert--success">
                <span class="alert__icon"><i class="fa-solid fa-check"></i></span>
                <span>{!! session('success') !!}</span>
            </div>
        @endif

        <div class="bg-white dark:bg-gray-800 dark:text-white overflow-hidden shadow sm:rounded-lg p-5">
            @yield('content')
        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">
                    <a href="https://alex.hampu.eu" class="ml-1">Developed with <i class="fa-solid fa-heart text-red-500"></i></a>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
@overwrite
