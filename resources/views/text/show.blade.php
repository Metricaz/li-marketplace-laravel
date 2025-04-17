<x-app-layout>
    <x-slot name="header">
        <div class="flex w-full font-semibold text-gray-800 dark:text-gray-200">
            <div class="flex-grow">
                <h2 class="text-xl leading-tight">
                    {{ __('Texts') }}: Showing {{ $text->category }}
                </h2>
            </div>

        </div>
    </x-slot>

    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="py-12 dark:text-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-3xl">Categoria: {{ $text->category }}</h1>
            <p class="max-w-6xl">
                {!! $text->top_text !!}
            </p>
            <p class="max-w-6xl">
                {!! $text->bottom_text !!}
            </p>
        </div>
    </div>
    </div>
</x-app-layout>
