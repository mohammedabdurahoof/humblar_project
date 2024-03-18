<x-user-layout>

    <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
        <h1 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight mb-4 text-center">All Posts</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('post.show', $post->id) }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $post->title }}</h5>
                    </a>
                    @php
                        // Split the content into lines
                        $lines = explode("\n", $post->content);

                        // Limit to first three lines
                        $previewLines = array_slice($lines, 0, 3);

                        // Join the lines back together
                        $previewContent = implode("\n", $previewLines);
                    @endphp
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ substr($post->content, 0, 100) }}...
                    </p>
                    <a href="{{ route('post.show', $post->id) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="mt-5">

            {{ $posts->links() }} {{-- Pagination links --}}
        </div>
    </div>
</x-user-layout>
