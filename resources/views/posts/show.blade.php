<x-layout>
  <x-slot:title>
    {{ $posts->content }}
  </x-slot:title>
<div class="container">
  <div class="header">
    <h1>{{ $posts->content }}</h1>
      <p>Kategorija: {{ $posts->category->content ?? "" }}</p> 

    <div class="button-container">
      <a href="/posts/{{ $posts->id }}/edit" class="btn-link" class="no-visited-link" ">Labot</a> 

      <form method="POST" action="/posts/{{ $posts->id }}">
      @csrf
      @method("DELETE")
        <button>Dzēst</button>
      </form> 
    </div><br> 

  </div> 
  <div class="input">
  <form method="POST" action="/comments" class="box">
    <h2>Izveido komentāru</h2>
    @csrf

      <input name="post_id" value="{{ $posts->id }}" hidden>

    @error("post_id")
        <p>{{ $message }}</p>
    @enderror

      <label>Autors</label><br>
      <input name="name" type="text" /><br>

    @error("name")
       <p>{{ $message }}</p>
    @enderror

      <label>Komentārs</label><br> 
      <textarea name="comment"></textarea><br>

    @error("comment")
      <p>{{ $message }}</p>
    @enderror

      <button>Saglabāt</button>
  </form>
</div>

<div class="comment">
  
  @foreach ($posts->comments as $comment)
        <h3>{{ $comment->name }}</h3>
        <p>{{ $comment->created_at }}</p>
        <p>{{ $comment->comment }}</p>
  @endforeach
</div>
</div>
</x-layout>