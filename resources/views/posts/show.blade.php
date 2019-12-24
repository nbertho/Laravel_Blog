{{--
  Variable : $posts: OBJ(id, titre, sousTitre, texte, image, datePublication)
--}}

@extends('templates.app')

@section('titre')
  {{ $post->titre }}
@endsection

@section('contenu')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{ asset('img/' . $post->image) }})">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $post->titre }}</h1>
            <h2 class="subheading">{{ $post->sousTitre }}</h2>
            <span class="meta">Posted on {{ \Carbon\Carbon::parse($post->datePublication)->format('d-m-Y') }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Textes -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <!-- EDIT -->
          <div class="clearfix">
            <a class="btn btn-secondary" href="#">Edit Post &rarr;</a>
            <a class="btn btn-secondary" href="#">Delete Post &rarr;</a>
          </div>

          <!-- POST DETAILS -->
          {!! html_entity_decode($post->texte) !!}

        </div>
      </div>
    </div>
  </article>

  <hr>
@endsection
