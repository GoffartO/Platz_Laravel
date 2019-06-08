<?php
   namespace App\Http\Models;
   use Illuminate\Database\Eloquent\Model;

   class Ressource extends Model {
       /**
         * The table associated with the model.
         * @var string
         */
        protected $table = 'ressources';

        public function users(){
        return $this->belongsTo('\App\User', 'user');

      }
      public function categories(){
        return $this->belongsTo('\App\Categorie', 'categorie');

      }
   }
