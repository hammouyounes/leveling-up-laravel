<h1>Création d'un post</h1>
<div>
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nom du post">
        <button type="submit">Créer</button>
    </form>
</div>
