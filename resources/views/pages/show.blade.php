{{--
  Variable : $page: OBJ(id, titre, sousTitre, texte, titreMenu, image, tri)
  - Si $page->id = 1 : Variable supplémentaires : $posts : Array(OBJ(id, titre, sousTitre, texte, image, datePublication))
--}}
@extends ('templates.app')

@section('titre')
  {{ $page->titre }}
@stop

@section('contenu')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('{{ asset('img/'.$page->image) }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>{{ $page->titre }}</h1>
            <span class="subheading">{{ $page->sousTitre }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Textes -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="clearfix">
          {!! html_entity_decode($page->texte) !!}
        </div>

        <!-- Intégration des vues complémentaires -->
          @if ($page->id === 1)
            @include('posts.index')
          @elseif ($page->id === 3)
            @include('templates.partials.contact-form')
          @endif

      </div>
    </div>
  </div>

  <hr>
@stop
