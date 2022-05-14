<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preguntas extends Model
{
    protected $fillable=["id_temas","pregunta1","pregunta2","pregunta3","pregunta4"];
    public function Alumnos(){
        return $this->belongsToMany("App\alumno");
    }
    public function Temas(){
        return $this->hasMany("App\tema");
    }
}
