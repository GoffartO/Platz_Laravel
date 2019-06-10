{{--
    resources/views/templates/partials/nav.blade.php
 --}}

<!-- HEADER -->
<div id="wrapper-header">
  <div id="main-header" class="object">
    <a href="{{ route('homepage') }}"><div class="logo"><img src="img/logo-burst.png" alt="logo platz" height="38" width="90"></div></a>

    {{-- <div class="logo"><img src="img/logo-burst.png" alt="logo platz" height="38" width="90"></div> --}}
    <div id="main_tip_search">
      {{-- <form>
        <input type="text" name="search" id="tip_search_input" list="search" autocomplete=off required>
      </form> --}}
      <!-- Right Side Of Navbar -->
      <ul class="ml-auto menuConnexion">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="" href="{{ route('login') }}">{{ __('Connexion') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('dashboard-form').submit();">
                        {{ __('Dashboard') }}
                    </a>
                    <form id="dashboard-form" method="get" action="{{ URL::route('voyager.dashboard') }}" style="display: none;">
                        @csrf
                    </form>
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Deconnexion') }}
                    </a>
                    <form id="logout-form" method="post" action="{{ URL::route('logout') }}" style="display: none;">
                        @csrf
                    </form>

                  </div>
              </li>
          @endguest
      </ul>

    </div>

    <div id="stripes"></div>
  </div>
</div>


<!-- NAVBAR -->
<div id="wrapper-navbar">
  <div class="navbar_ object">
    <div id="wrapper-bouton-icon">
      <div id="bouton-ai"><img src="img/icon-ai.svg" alt="illustrator" title="Illustrator" height="28" width="28"></div>
      <div id="bouton-psd"><img src="img/icon-psd.svg" alt="photoshop" title="Photoshop" height="28" width="28"></div>
      <div id="bouton-theme"><img src="img/icon-themes.svg" alt="theme" title="Theme" height="28" width="28"></div>
      <div id="bouton-font"><img src="img/icon-font.svg" alt="font" title="Font" height="28" width="28"></div>
      <div id="bouton-photo"><img src="img/icon-photo.svg" alt="photo" title="Photo" height="28" width="28"></div>
      <div id="bouton-premium"><img src="img/icon-premium.svg" alt="premium" title="Premium" height="28" width="28"></div>
    </div>
  </div>
</div>

<!-- FILTER -->
<div id="main-container-menu" class="object">
  <div class="container-menu">

    <div id="main-cross">
      <div id="cross-menu"></div>
    </div>
    <div id="main-small-logo">
      <div class="small-logo"></div>
    </div>
    <div id="main-premium-ressource">
      <div class="premium-ressource"><a href="#">Premium resources</a></div>
    </div>
    <div id="main-themes">
      <div class="themes"><a href="#">Latest themes</a></div>
    </div>
    <div id="main-psd">
      <div class="psd"><a href="#">PSD goodies</a></div>
    </div>
    <div id="main-ai">
      <div class="ai"><a href="#">Illustrator freebies</a></div>
    </div>
    <div id="main-font">
      <div class="font"><a href="#">Free fonts</a></div>
    </div>
    <div id="main-photo">
      <div class="photo"><a href="#">Free stock photos</a></div>
    </div>
    <div id="main-photo">
      <div class="photo"><a href="#">Inscription</a></div>
    </div>
    <div id="main-photo">
      <div class="photo"><a href="#">Connextion</a></div>
    </div>
  </div>
</div>
