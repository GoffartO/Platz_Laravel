<?php

         namespace App\Http\Controllers;
         use Illuminate\Http\Request;
         use App\Http\Models\Newsletter as NewslettersMdl;
         use Illuminate\Support\Facades\View;
         use App\Newsletter;

         class NewslettersController extends Controller{

             public function store(Request $request)
             {
                 $newsletter = new Newsletter();
                 $newsletter->mail = $request['email'];


                 $newsletter->save();
                 return redirect(action('RessourcesController@index'))->with('success', 'L\'email a bien été enregistré');
             }
         }
