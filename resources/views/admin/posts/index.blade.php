<div>
    <h1>Liste des posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>{{ $post['title'] }}</h2>
                <p>{{ $post['content'] }}</p>
            </li>
        @endforeach
    </ul>
</div>
