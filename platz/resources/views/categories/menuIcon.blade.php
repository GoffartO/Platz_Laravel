{{--
      resources/views/categories/index.blade.php
      Variables disponibles :
        $categories Array (OBJ (id,...
 --}}


 <ul>
   <li>
     <a href="{{ route('homepage') }}">
       <img src="img/all.png" alt="view all" title="all" height="28">
     </a>
   </li>

   @foreach ($categories as $categorie)
     <li>
       <a href="/?categorie={{ $categorie->id }}">
         <img src="storage/{{ $categorie->icone }}" alt="{{ $categorie->nom }}" title="{{ $categorie->nom }}" height="28">
       </a>
     </li>
   @endforeach

 </ul>
