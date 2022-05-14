<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    protected $fillable=["id_preguntas","nombre","edad","dni"];
    public function Preguntas(){
        return $this->belongsToMany("App\preguntas");
    }
    public function Temas(){
        return $this->hasMany("App\tema");
    }
    public function Admin(){
        return $this->belongsTo("App\admin");
    }
}
