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

         public function show($id){
            $ressource = RessourcesMdl::with('users')->find($id);

            // Trouver les ressources avec la même catégorie et en excluant la catégorie actuelle
            $ressourcesRelated = RessourcesMdl::with('categories')
                                              ->where([
                                                      ['categorie',$ressource->categorie],
                                                      ['id','<>',$ressource->id]
                                                    ])
                                              ->take(4)
                                              ->get();
            return View::make('ressources.show', ['ressource' => $ressource,
                                                  'ressourcesRelated' => $ressourcesRelated  ]);

         }


       }
