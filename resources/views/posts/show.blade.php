<x-app-layout>
    <x-slot name='header'>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-3xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200">
                    <h1 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">{{ $post->title }}</h1>
                    <hr class=" mb-4 border-gray-300 dark:border-gray-600">
                    <p class="text-gray-700 dark:text-gray-300">{{ $post->content }}</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
