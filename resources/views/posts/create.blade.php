<x-app-layout>
    <x-slot name='header'>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-2xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200">
                    <h1 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Create Post</h1>

                    <!-- Post Creation Form -->
                    <form method="POST" action="{{ route('posts.store') }}" class="space-y-4">
                        @csrf

                        <!-- Title -->
                        <div>
                            <label for="title"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">Title</label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}" required
                                autofocus
                                class="mt-1 p-2 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('title')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div>
                            <label for="content"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">Content</label>
                            <textarea id="content" name="content" required rows="5"
                                class="mt-1 p-2 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded">
                                Create Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
