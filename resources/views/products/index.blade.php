<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    div {
        padding: 20px;
    }

    h1 {
        color: #333;
        text-align: center;
    }

    table {
        margin: 20px auto;
        width: 60%;
        border: 1px solid #ddd;
        border-collapse: collapse;
        background-color: #fff;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #f4f4f4;
        color: #333;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 5px;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

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