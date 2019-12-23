{{--
  Variable : $pages: ARRAY(id, titre, sousTitre, texte, titreMenu, image, tri)
--}}

<ul class="navbar-nav ml-auto">
  @foreach ($pages as $page)
  <li class="nav-item">
    <a class="nav-link" href="{{ URL::route('pages.show', $page->id) }}">{{ $page->titreMenu }}</a>
  </li>
  @endforeach
</ul>
