{{--
    resources/views/templates/app.blade.php
    Template général
 --}}

<!DOCTYPE HTML>
  <html>
    @include('templates.partials.head')

    <body>
      <a name="ancre"></a>
      <!-- CACHE -->
      <div class="cache"></div>

      <!-- Navigation -->
      @include('templates.partials.nav')

     <!-- PORTFOLIO -->
     <div id="wrapper-container">

        <!-- CONTENU -->
        <main>
          @section('contenu')
          @show
        </main>

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

        <!-- Footer -->
        @include('templates.partials.footer')
    </div>

    <!-- Scripts -->
    @include('templates.partials.scripts')

  </body>
</html>
