{{--
      resources/views/ressources/show.blade.php
      Variables disponibles :
        $ressources Array (OBJ (id, titre, texte, date, document, image, user, categorie))
 --}}

@extends('templates.app')

@section('title')
  {{ $ressource->titre }}
@stop

@section('contenu')

<div id="wrapper-container">
  <div class="container_ object">

    <div id="main-container-image">

              <div class="title-item">
                <div class="title-icon"><img src="{{asset('storage/'.$ressource->categories->icone) }}" /></div>
                  <div class="title-text">{{ $ressource->titre }}</div>

                  <div class="title-text-2">{{ date('d-m-Y', strtotime($ressource->date))}} by {{ $ressource->users->name}}</div>
              </div>
      <div class="work">
        <figure class="white">
             <img src="{{asset('storage/'.$ressource->image) }}" alt="{{ $ressource->titre }}" />

          </figure>

              <div class="wrapper-text-description">


                <div class="wrapper-file">
                    <div class="icon-file"><img src="{{asset('storage/'.$ressource->categories->icone) }}" alt="" width="21" height="21"/></div>
                      <div class="text-file"> {{ $ressource->categories->nom }}</div>
                  </div>

                  <div class="wrapper-weight">
                    <div class="icon-weight"><img src="{{asset('img/icon-weight.svg')}}" alt="" width="20" height="23"/></div>
                      <div class="text-weight">23 Mo</div>
                  </div>

                  <div class="wrapper-desc">
                    <div class="icon-desc"><img src="{{asset('img/icon-desc.svg')}}" alt="" width="24" height="24"/></div>
                      <div class="text-desc">{{ $ressource->texte }} </div>
                  </div>

                  <div class="wrapper-download">
                    <div class="icon-download"><img src="{{asset('img/icon-download.svg')}}" alt="" width="19" height="26"/></div>
                      <div class="text-download"><a href="#"><b>Download</b></a></div>
                  </div>

                  @include('ressources.more', ['ressource'=>$ressource,'ressourcesRelated'=>$ressourcesRelated])
                <div class="post-reply">
                    <div id="title-post-send">
                        <hr/><h2>Your comments</h2>
                    </div>
                </div>
                <div class="post-reply">
                      <div class="image-reply-post"></div>
                        <div>Igor vlademir</div>
                    <div class="text-reply-post">Awesome mockup, i like it very much ! It will help me for my website i was looking for since few days. Thank you a lot.</div>
                </div>

                  <div class="post-reply">
                    <div class="image-reply-post-2"></div>
                    <div class="name-reply-post">Nathan Shaw</div>
                    <div class="text-reply-post-2">Well done ! I like the way you did it. Awesome ! </div>
                </div>

                <div class="post-send">
                    <div id="main-post-send">
                          <div id="title-post-send">Add your comment</div>
                          <form id="contact" method="post" action="/onclickprod/formsubmit_op.asp">
                              <fieldset>
                              <p><textarea id="message" name="message" maxlength="500" placeholder="Votre Message" tabindex="5" cols="30" rows="4"></textarea></p>
                            </fieldset>
                            <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer" /></div>
                            </form>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
@stop
