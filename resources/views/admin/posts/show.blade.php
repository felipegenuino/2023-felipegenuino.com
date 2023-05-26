<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Exibe post') }}
        </h2>
    </x-slot>


    <div class="pb-2">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg m-5 p-5">
	<h1 class="text-2xl font-bold leading-tight widescreen:text-3xl">{{ $post->title }}</h1>



  <div>
    <img src="{{ $post->thumbnail}}" alt="{{ $post->title }}">
      <hr>
    <em>  {{ date('M j, Y', strtotime($post->created_at)) }}</em>
    <hr />
    {{ $post->body }}
    <hr>
    <strong>link:</strong> <em> {{ $post->url }}</em>
  </div>


        </div>
    </div>
    </div>
</x-app-layout>
