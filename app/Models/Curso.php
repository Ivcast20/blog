<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $table = "users"; con esta propiedad se puede cambiar a la tabla a la que hace referencia

    //Con esta propiedad se especifican los campos que pueden ser ingresados a la base de datos, cuando se realiza
    //un insert. Esto permite que un usuario modifique el html e ingrese campos delicados.
    // protected $fillable = [
    //     'name',
    //     'descripcion',
    //     'categoria'
    // ];

    //La propiedad fillable se la puede utilizar cuando son pocos campos. Sin embargo cuando mi tabla
    //tiene demasiados campos se puede ensuciar mucho el código.
    //Para evitar esto laravel tiene pensado usar la propiedad guarded

    //Aquí se especificarán los campos que no pueden ser llenados en un formulario

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
