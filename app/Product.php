<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(Category::class); //En el caso de que se use en la tabla productos categorias_id (en español), se debe usar una coma y luego especificar ese atributo, y caso en el caso de que en la tabla categorias el "id" esté con otro nombre, se debe continuar con una segunda coma y especificar su nombre. 
    }
}
