<x-layout>
<x-slot:title>Labo komentāru</x-slot:title>
    <h1>Labo komentāru</h1>
    <form method="POST" action="/comments/{{ $comment->id }}">
    @csrf 
    @method('PUT')

        <label>Autors</label><br>
            <input type="text" name="name" value="{{ old("name", $comment->name) }}" /><br>

        @error("name")
            <p>{{ $message }}</p>
        @enderror
        
        <label>
            Izlabo komentāru: <br><br>
            <input type="text" name="comment" value="{{ old("comment", $comment->comment) }}" /> <br><br>
        </label>
        
        @error("comment")
            <p>{{ $message }}</p>
        @enderror
        
        <button>Saglabāt</button>
</form>
</x-layout>