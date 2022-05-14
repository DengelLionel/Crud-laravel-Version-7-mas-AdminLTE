<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tema extends Model
{
    protected $fillable=["nombre","categoria"];
    public function Alumnos(){
        return $this->belongsTo("App\alumno");
    }
    public function Preguntas(){
        return $this->belongsTo("App\preguntas");
    }
}
