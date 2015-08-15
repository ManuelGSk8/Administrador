<?php

namespace App\Entities\Parametros;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Parametros extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['id','nombre','nombre_opcional','valor','padreid','nombrecorto','descripcion','created_at','updated_at'];

}
