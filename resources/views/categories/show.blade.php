<x-layout>
  <x-slot:title>
    {{ $categories->content }}
  </x-slot:title>
  <h1>{{ $categories->content }}</h1>

  <div class="button-container">
  <a href="/categories/{{ $categories->id }}/edit" class="no-visited-link">Labot</a> 
 

  <form method="POST" action="/categories/{{ $categories->id }}">
  @csrf
  @method("DELETE")
  <button>Dzēst</button>
  </form>
</div>
</x-layout>