<x-layout>
    <h1>Visi bloga ieraksti</h1>
    @foreach ($posts as $post)
        <li><a href="/posts/{{ $post->id }}">{{ $post->content }}</a></li>
    @endforeach
</x-layout>