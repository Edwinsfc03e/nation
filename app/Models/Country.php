<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "Continents";
    protected $primaryKey = "continet_id";
    
    public function region(){
        return $this-> belongsto(Region::class,
                                    "continent_id");                               
          
    }
     public function idiomas(){
        return $this-> belongsToMany(Language::class,"country_languages",
                                                         "country_id",
                                                         "language_id");
    }
    use HasFactory;
}
