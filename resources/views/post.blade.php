<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    
    <section class="grid grid-cols-2">
        <article class="max-w-sm pb-5 border-b border-gray-400">
            <h3 class="text-2xl font-bold">{{ $post['title'] }}</h3>
            <span class="text-sm text-gray-800">{{ $post['author'] }} | 12 Mey 2025</span>
            <div class="deskripsi text-sm my-2">
                <p>{{ $post['body'] }}</p>
            </div>
            <a href="/posts" class="text-blue-800 text-base hover:underline">
                &laquo; Back
            </a>
        </article>
    </section>


</x-layout>