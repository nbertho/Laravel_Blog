{{--
  Variable : $posts: OBJ(id, titre, sousTitre, texte, image, datePublication)
--}}

  @foreach ($posts as $post)
  <div class="post-preview">
    <a href="{{ route('posts.show', $post->id) }}">
      <h2 class="post-title">{{ $post->titre }}</h2>
      <h3 class="post-subtitle">{{ $post->sousTitre }}</h3>
    </a>
    <p class="post-meta">Posted on : {{ $post->datePublication }}</p>
  </div>
  <hr>
  @endforeach
