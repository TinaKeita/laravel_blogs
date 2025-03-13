<x-layout>
<x-slot:title>Izveidot blogu</x-slot:title>
  <h1>Izveido bloga ierakstu</h1>
  <form  method="POST" action="/posts">
  @csrf
    <textarea name="content" placeholder="Kas šodien prātā..."rows="4" cols="50"></textarea><br><br>
    
    @error("content")
        <p>{{ $message }}</p>
    @enderror

    Kategorija:<br>
    <select name="category_id">
            <option value="0">Bez kategorijas</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->content }}</option>
            @endforeach
    </select><br><br>

    <button>Saglabāt</button>
</form>
</x-layout>