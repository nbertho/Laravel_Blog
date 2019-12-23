{{--
  Variable : $page: OBJ(id, titre, sousTitre, texte, titreMenu, image, tri)
--}}
<h1>{{ $page->titre }}</h1>
<div>
  {!! html_entity_decode($page->texte) !!}
</div>
