@foreach ($posts as $post)
    <h2>Tile: {{ $post->tile }}</h2>
    <p>description: {{ $post->description }}</p>
    <p>content: {{ $post->content }}</p>
@endforeach