<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h3 class="text-xl">coba ini halaman blog</h3> --}}
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['id'] }}" class="hover:underline">
                <h2 class="mb-4 text-3xl tracking-tight text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | 6 agustus 2024
            </div>
            <p class="mb-4 font-light ">{{ Str::limit($post['body'], 30) }}</p>
            <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Baca selengkapnya
                &raquo;</a>
        </article>
    @endforeach
</x-layout>
