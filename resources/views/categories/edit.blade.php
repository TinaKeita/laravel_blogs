<x-layout>
<x-slot:title>Labo kategoriju</x-slot:title>
    <h1>Labo kategoriju</h1>
    <form method="POST" action="/categories/{{ $categories->id }}">
    @csrf 
    @method('PUT')
        <label>
            Izlabo kategoriju: <br><br>
            <input type="text" name="content" value="{{ old("content", $categories->content) }}" /> <br><br>
        </label>
        
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        
        <button>Saglabāt</button>
</x-layout>