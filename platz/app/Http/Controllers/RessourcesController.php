<?php
       namespace App\Http\Controllers;
       use App\Http\Models\Ressource as RessourcesMdl;
       use Illuminate\Support\Facades\View;


       class RessourcesController extends Controller {

         public function index(){
            $ressources = RessourcesMdl::get();
            return View::make('ressources.index', ['ressources' => $ressources ]);
         }

         public function show($id = 1){

            $ressource = RessourcesMdl::with('users')->find($id);
            //dd($ressource);

            return View::make('ressources.show', ['ressource' => $ressource ]);
         }
       }
