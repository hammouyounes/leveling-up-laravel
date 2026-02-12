<h1>Création d'un produit</h1>
<div>
    <form action="{{route('admin.products.store')}}" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="number" name="price">
        <button type="submit">Submit</button>
    </form>
</div>
<div>
    <a href="{{route('admin.products.index')}}">Voir les produits</a>
</div>