<x-layout>
<x-slot:title>Izveidot blogu</x-slot:title>
  <h1>Izveido bloga iearkstu</h1>
  <form  method="POST" action="/posts">
  @csrf
    <input name="content" />
    @error("content")
        <p>{{ $message }}</p>
    @enderror
    <button>Saglabāt</button>
</form>
</x-layout>