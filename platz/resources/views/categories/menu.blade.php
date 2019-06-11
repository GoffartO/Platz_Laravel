{{--
      resources/views/categories/index.blade.php
      Variables disponibles :
        $categories Array (OBJ (id,...
 --}}


 <ul>
   @foreach ($categories as $categorie)
     <li>
       <div class="categorieMenu">
         <a href="/?categorie={{ $categorie->id }}">
           {{ $categorie->nom }}
         </a>
      </div>
     </li>
   @endforeach
   <li>
     <div class="categorieMenu">
       <a class="" href="{{ route('login') }}">{{ __('Connexion') }}</a>
     </div>
   </li>
   <li>
     <div class="categorieMenu">
       <a class="" href="{{ route('register') }}">{{ __('Inscription') }}</a>
     </div>
   </li>
 </ul>
