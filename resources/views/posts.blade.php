<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    
    <section class="grid grid-cols-2">
        @foreach( $posts as $post )
            <article class="max-w-sm pb-5 border-b border-gray-400 mb-8">
                <a href="/posts/{{ $post['slug'] }}" class="group">
                    <h3 class="text-2xl font-bold group-hover:underline">{{ $post['title'] }}</h3>
                </a>
                <span class="text-sm text-gray-800">
                    <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a>
                    | 
                    <a href="/kategori/{{ $post->category->slug }}" class="hover:underline">{{ $post->category->nama_kategori }}</a>
                    |
                    {{ $post['created_at']->format('j F Y') }}
                </span>
                <div class="deskripsi text-sm my-2">
                    <p>{{ Str::limit($post['body'], 100) }}</p>
                </div>
                <a href="/posts/{{ $post['slug'] }}" class="text-blue-800 text-base hover:underline">
                    Readmore &raquo;
                </a>
                
            </article>
        @endforeach
    </section>


</x-layout>