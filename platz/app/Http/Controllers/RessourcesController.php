<?php
       namespace App\Http\Controllers;
       use App\Http\Models\Ressource as RessourcesMdl;
       use Illuminate\Support\Facades\View;


       class RessourcesController extends Controller {

         public function index(){
             if (request()->has('categorie')) {
               $ressources = RessourcesMdl::with('categories')->where('categorie', request('categorie'))->orderBy('date', 'desc')->paginate(4)->appends('categorie', request('categorie'));
             } else {
               $ressources = RessourcesMdl::with('categories')->orderBy('date', 'desc')->paginate(4);
             }
            return View::make('ressources.index', ['ressources' => $ressources ]);
         }

         public function show($id = 1){
            $ressource = RessourcesMdl::with('users')->find($id);
            return View::make('ressources.show', ['ressource' => $ressource ]);
         }


       }
