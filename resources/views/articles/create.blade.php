<form action="{{route('admin.articles.store')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Titre de l'article">
    <br><br>
    <textarea name="content" placeholder="Le contenue de l'article"></textarea>
    <br><br>
    <input type="text" name="author" placeholder="author de l'article">
    <br><br>
    <button type="submit">Envoyer</button>
</form>

 {{-- title (string)
// ✓ content (text)
// ✓ author (string)
// ✓ timestamp --}}
