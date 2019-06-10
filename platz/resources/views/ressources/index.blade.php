{{--
      resources/views/ressources/index.blade.php
      Variables disponibles :
        $ressources Array (OBJ (id, titre, texte, date, document, image, user, categorie))
 --}}

@extends('templates.app')

@section('title')
  Free Grid Wordpress Theme
@stop

@section('contenu')
  {{-- <link href='{{ asset('css/style.css')}}' rel='stylesheet' type='text/css'> --}}

<div class="container_ object">
  <div id="main-container-image">
    <section class="work_">

      @foreach ($ressources as $ressource)
        <figure class="white">
          <a href="{{ route('ressources.show', $ressource->id)}}">
            <img src="storage/{{ $ressource->image }}" alt="" />
            <dl>
              <dt>{{ $ressource->titre }}</dt>
              <dd>{{ substr($ressource->texte, 0, 120) }}...</dd>
            </dl>
          </a>
          <div id="wrapper-part-info">
            <div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
            <div id="part-info">{{ $ressource->titre }}</div>
          </div>
        </figure>
      @endforeach

    </section>
  </div>
</div>

<div id="wrapper-oldnew">
  <div class="oldnew">
    <div class="wrapper-oldnew-prev">
      <div id="oldnew-prev"></div>
    </div>
    <div class="wrapper-oldnew-next">
      <div id="oldnew-next"></div>
    </div>
  </div>
</div>
@stop
