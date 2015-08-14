<?php

namespace App\Entities\Banners;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Banners extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['id','titulo','url_link','fecha_inicio','fecha_fin','estado','created_at','updated_at'];

}
