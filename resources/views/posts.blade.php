<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    
    <section class="grid grid-cols-2">
        @foreach( $posts as $post )
            <article class="max-w-sm pb-5 border-b border-gray-400">
                <a href="posts/{{ $post['slug'] }}" class="group">
                    <h3 class="text-2xl font-bold group-hover:underline">{{ $post['title'] }}</h3>
                </a>
                <span class="text-sm text-gray-800">{{ $post['author'] }} | 12 Mey 2025</span>
                <div class="deskripsi text-sm my-2">
                    <p>{{ Str::limit($post['body'], 100) }}</p>
                </div>
                <a href="posts/{{ $post['slug'] }}" class="text-blue-800 text-base hover:underline">
                    Readmore &raquo;
                </a>
            </article>
        @endforeach
    </section>


</x-layout>