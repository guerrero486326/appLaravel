<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories"; //para que laravel sepa a que tabla es cuando el nombre del modelo no se parece al que esta en la base de datos

    //relacion entre modelos  de uno a muchos inversa
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
