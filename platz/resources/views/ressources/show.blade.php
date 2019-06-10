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

{{-- <link href='{{ asset('css/details.css')}}' rel='stylesheet' type='text/css'> --}}
<div id="wrapper-container">
  <div class="container_ object">

    <div id="main-container-image">

              <div class="title-item">
                <div class="title-icon"></div>
                  <div class="title-text">{{ $ressource->titre }}</div>
                  <?php
                //  dd($ressource->users->name);
                ?>
                  <div class="title-text-2">{{ date('d-m-Y', strtotime($ressource->from_date))}} by {{ $ressource->users->name}}</div>
              </div>
      <div class="work">
        <figure class="white">
             <img src="storage/{{ $ressource->image }}" alt="" />

          </figure>

              <div class="wrapper-text-description">


                <div class="wrapper-file">
                    <div class="icon-file"><img src="{{asset('img/icon-psdfile.svg')}}" alt="" width="21" height="21"/></div>
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

                  <div class="wrapper-morefrom">
                    <div class="text-morefrom">More from .psd</div>
                      <div class="image-morefrom">
                        <a href="#"><div class="image-morefrom-1"><img src="img/psd-1.jpg" alt="" width="430" height="330"/></div></a>
                          <a href="#"><div class="image-morefrom-2"><img src="img/psd-2.jpg" alt="" width="430" height="330"/></div></a>
                          <a href="#"><div class="image-morefrom-3"><img src="img/psd-3.jpg" alt="" width="430" height="330"/></div></a>
                          <a href="#"><div class="image-morefrom-4"><img src="img/psd-6.jpg" alt="" width="430" height="330"/></div></a>
                      </div>
                  </div>
              </div>
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
