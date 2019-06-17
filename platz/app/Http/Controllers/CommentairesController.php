<?php
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use App\Http\Models\Commentaire as CommentairesMdl;
  use Illuminate\Support\Facades\View;
  use App\Commentaire;
  use Response;
  use Illuminate\Support\Facades\Storage;



  class CommentairesController extends Controller{

    public function index(){
      $commentaires = CommentairesMdl::get();
      return View::make('commentaires.form',
      ['commentaires' => $commentaires]);
    }

    public function show($id){
      $commentaire = CommentairesMdl::find($id);
      return View::make('commentaires.show', ['commentaire'=>$commentaire]);
    }



    public function ajaxInsert(Request $request, array $data = null){

    $data= new Commentaire();
    $data->texte = $request['texte'];
    $data->ressource= $request['ressource'];
    // $data->nom= $request['nom'];

    $data->save();

    return Response()->json($data);
      }
    }
