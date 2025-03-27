<x-layout>
  <x-slot:title>
    {{ $categories->content }}
  </x-slot:title>
  <h1>{{ $categories->content }}</h1>
  <h3>Pieejamie posts:</h3>
  
  @foreach ($categories->posts as $post)
        <li>{{ $post->content }}</li>
  @endforeach

  <br>
  <div class="button-container">
  <a href="/categories/{{ $categories->id }}/edit" class="btn-link" class="no-visited-link">Labot</a> 
 

  <form method="POST" action="/categories/{{ $categories->id }}">
  @csrf
  @method("DELETE")
  <button>Dzēst</button>
  </form>
</div>
</x-layout>