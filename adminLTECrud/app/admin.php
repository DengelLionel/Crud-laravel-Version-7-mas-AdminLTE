<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable=["id_alumno","nombre","dni","edad"];
    public function Alumnos(){
        return $this->hasMany("App\alumno");
    }
}
