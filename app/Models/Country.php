<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     public function idiomas(){
        return $this-> belongsToMany(Language::class,"country_languages",
                                                         "country_id",
                                                         "language_id");
    }
    use HasFactory;
}
