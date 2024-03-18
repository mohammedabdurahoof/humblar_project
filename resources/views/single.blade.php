<x-user-layout>

    <main class="antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <h1 class="mb-4 text-3xl font-bold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrv3cNfOT8M33t5z7zr9Bu1uPpcAzgPFfRbMXeu9qmXMMExkaJ5vjULbA1MrLhNXy0ht8&usqp=CAU"
                                alt="Jese Leos">
                            <div>
                                <a href="#" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->user->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                        datetime="2022-02-08" title="February 8th, 2022">{{ $post->created_at }}</time>
                                </p>
                            </div>
                        </div>
                    </address>

                </header>
                <p class="text-gray-800 dark:text-gray-200 leading-tight">
                    {{ $post->content }}
                </p>
            </article>
        </div>
    </main>


</x-user-layout>
