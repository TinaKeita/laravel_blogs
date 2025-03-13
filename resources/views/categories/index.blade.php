<x-layout>
    <h1>Izveidotās kategorijas</h1>
    @foreach ($categories as $category)
        <li><a href="/categories/{{ $category->id }}">{{ $category->content }}</a></li>
    @endforeach
</x-layout>