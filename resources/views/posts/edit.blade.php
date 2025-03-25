<x-layout>
<x-slot:title>Labo veicamo uzdevumu</x-slot:title>
    <h1>Labo veicamo uzdevumu</h1>
    <form method="POST" action="/posts/{{ $posts->id }}">
    @csrf 
    @method('PUT')
        <label>
            Izlabo ierakstu: <br><br>
            <input type="text" name="content" value="{{ old("content", $posts->content) }}" /> <br><br>
        </label>
        
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