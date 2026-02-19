<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    form {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="text"]:focus {
        border-color: #007bff;
        outline: none;
    }

    .text-red-500 {
        color: #e3342f;
        font-size: 0.875rem;
        margin-bottom: 10px;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 5px;
        width: 100%;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

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