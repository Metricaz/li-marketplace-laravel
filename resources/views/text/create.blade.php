 <x-app-layout>
  <x-slot name="header">
    <div class="flex w-full font-semibold text-gray-800 dark:text-gray-200">
      <div class="flex-grow">
        <h2 class="text-xl leading-tight">
          {{ __('Create Text') }}
        </h2>
      </div>
    </div>
  </x-slot>

  @if (session('status'))
  <div class="alert alert-info">{{ session('status') }}</div>
  @endif

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white p-10 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('text.store')}}">
          @csrf
          <div class="mt-4">
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" name="title" :value="old('title')" required />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
          </div>
          <div class="mt-4">
            <x-input-label for="prompt" :value="__('Keyword')" />
            <textarea id="prompt" rows="4" name="prompt" :value="old('prompt')" required class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Keyword"></textarea>
          </div>

          <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select text type</label>
          <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            @foreach($types as $key => $type)
              <option value="{{ $key }}">{{ $type }}</option>
            @endforeach
          </select>

          <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
              {{ __('Save') }}
            </x-primary-button>
          </div>

        </form>
      </div>
    </div>
  </div>
</x-app-layout>
