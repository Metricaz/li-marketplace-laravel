<x-app-layout>
    <x-slot name="header">
        <div class="flex w-full font-semibold text-gray-800 dark:text-gray-200">
            <div class="flex-grow">
                <h2 class="text-xl leading-tight">
                    {{ __('Texts') }}
                </h2>
            </div>
            <div>
                <a href="{{ route('text.create') }}" class="p-2 bg-green-600 hover:bg-green-700 rounded-lg">+</a>
            </div>
        </div>
    </x-slot>

    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white px-10 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="w-full dark:text-white">
                    <thead>
                        <tr class="py-2 my-2 font-bold border-b table-auto">
                            <th>ID</td>
                            <th>category</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($texts as $key => $value)
                        <tr>
                            <td class="py-4 text-center">{{ $value->id }}</td>
                            <td>{{ $value->category }}</td>
                            <td class="text-center">
                                <a class="p-3 text-sm bg-blue-700 hover:bg-blue-800 rounded-lg" href="{{ route('text.show', $value->id) }}">Show</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
