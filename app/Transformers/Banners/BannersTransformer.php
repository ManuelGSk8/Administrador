<?php

namespace App\Transformers\Banners;

use League\Fractal\TransformerAbstract;
use App\Entities\Banners;

/**
 * Class BannersTransformer
 * @package namespace App\Transformers\Banners;
 */
class BannersTransformer extends TransformerAbstract
{

    /**
     * Transform the \Banners entity
     * @param \Banners $model
     *
     * @return array
     */
    public function transform(Banners $model) {
        return [
            'id'            => (int)$model->id,
            'titulo'        => (string)$model->titulo,
            'url_link'      => (string)$model->url_link,
            'fecha_inicio'  => $model->fecha_inicio,
            'fecha_fin'     => $model->fecha_fin,
            'estado'        => $model->estado,
            /* place your other model properties here */

            'created_at'    => $model->created_at,
            'updated_at'    => $model->updated_at
        ];
    }
}