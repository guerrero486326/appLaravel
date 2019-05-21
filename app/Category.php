<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories"; //para que laravel sepa a que tabla es cuando el nombre del modelo no se parece al que esta en la base de datos
    protected $fillable = [ // sirve para cuando el llenado de la tabla es masivo
    	'name',
    	'image'
    	//'money'
    ];

    protected $dates = ['movement_date']; // para indicar que en la variable movement_date guarde la fecha en un formato como el created_at y no hayan errores 

    //relacion entre modelos  de uno a muchos inversa
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function getMoneyDecimalAttibute(){
    	return $this->attributes['nomey'] / 100; //esto es para el caso de cuando se trabaja con monedas para que almacene bien los valores a la base de datos
    }
}
