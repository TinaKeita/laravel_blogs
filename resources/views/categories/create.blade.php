<x-layout>
<x-slot:title>Izveidot kategoriju</x-slot:title>
  <h1>Izveido kategoriju</h1>
  <form  method="POST" action="/categories">
  @csrf
    <input name="content" />
    @error("content")
        <p>{{ $message }}</p>
    @enderror
    <button>Saglabāt</button>
</form>
</x-layout>