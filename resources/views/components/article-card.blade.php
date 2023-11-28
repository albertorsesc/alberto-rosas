<figure class="md:flex rounded-xl p-8 md:p-0 hover:bg-slate-800">
    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
        <p class="text-sm font-medium text-purple-900 text-start">
            @foreach ($tags as $tag)
                <span class="mr-2 rounded-lg bg-purple-400 py-1 px-2">{{ $tag }}</span>
            @endforeach
        </p>

        <a href="{{ $link }}" class="mt-2 block" target="_blank">
            <p class="text-xl font-semibold text-gray-300 text-start">
                {{ $title }}
            </p>
            <blockquote>
                <p class="mt-2 text-lg font-medium text-gray-400">
                    “{{ $excerpt }}”
                </p>
            </blockquote>
        </a>
        <figcaption class="font-medium">
            <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="2020-03-16">{{ $date }}</time>
                <span aria-hidden="true">·</span>
                <span>{{ $readTime }} min read</span>
            </div>
        </figcaption>
    </div>
</figure>
