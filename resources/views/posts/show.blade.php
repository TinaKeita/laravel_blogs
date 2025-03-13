<x-layout>
  <x-slot:title>
    {{ $posts->content }}
  </x-slot:title>
  <h1>{{ $posts->content }}</h1>
  <!-- <p>{{ $categories->content }}</p> -->

  <div class="button-container">
  <a href="/posts/{{ $posts->id }}/edit" class="btn-link" class="no-visited-link" ">Labot</a> 
 

  <form method="POST" action="/posts/{{ $posts->id }}">
  @csrf
  @method("DELETE")
  <button>Dzēst</button>
  </form>
</div>
</x-layout>