{{--
      resources/views/ressources/index.blade.php
      Variables disponibles :
        $ressources Array (OBJ (id, titre, texte, date, document, image, user, categorie))
 --}}

@extends('templates.app')

@section('contenu')

<div class="container object">
  <div id="main-container-image">
    <section class="work">

      @foreach ($ressources as $ressource)
        <figure class="white">
          <a href="details.html">
            <img src="storage/{{ $ressource->image }}" alt="" />
            <dl>
              <dt>{{ $ressource->titre }}</dt>
              <dd>{{ $ressource->texte }}</dd>
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
