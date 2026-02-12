<form method="POST" action="{{ route('admin.products.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Nom du produit" value="{{ old('name') }}">
    @error('name')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <input type="text" name="price" placeholder="Prix" value="{{ old('price') }}">
    @error('price')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <button type="submit">Ajouter</button>
</form>