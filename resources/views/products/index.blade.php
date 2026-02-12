<div>
    <h1>Liste des produits</h1>
    <a href='{{route('admin.products.create')}}'><button>Ajouter produit</button></a>
    <table border="1" style="width:45%; border-collapse: collapse; text-align: left;">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix (€)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['price'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>