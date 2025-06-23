<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    
    <section>
        <article class="pb-5 border-b border-gray-400">
            <h3 class="text-2xl font-bold">{{ $post['title'] }}</h3>
            <span class="text-sm text-gray-800">
                <a href="/authors/{{ $post->author->id }}" class="hover:underline">{{ $post->author->name }}</a>
                | 
                <a href="/kategori/{{ $post->category->slug }}" class="hover:underline">{{ $post->category->nama_kategori }}</a>
                |
                {{ $post['created_at']->format('j F Y') }}
            </span>
            <div class="deskripsi text-sm my-2">
                <p>{{ $post['body'] }}</p>
            </div>
            <a href="/posts" class="text-blue-800 text-base hover:underline">
                &laquo; Back
            </a>
        </article>
    </section>


</x-layout>