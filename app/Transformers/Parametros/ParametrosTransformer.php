<?php

namespace App\Transformers\Parametros;

use League\Fractal\TransformerAbstract;
use App\Entities\Parametros;

/**
 * Class ParametrosTransformer
 * @package namespace App\Transformers\Parametros;
 */
class ParametrosTransformer extends TransformerAbstract
{

    /**
     * Transform the \Parametros entity
     * @param \Parametros $model
     *
     * @return array
     */
    public function transform(Parametros $model) {
        return [
            'id'                => (int)$model->id,
            'nombre'            => (string)$model->nombre,
            'nombre_opcional'   => (string)$model->nombre_opcional,
            'valor'             => (string)$model->valor,
            'padreid'           => (int)$model->padreid,
            'nombrecorto'       => (string)$model->nombrecorto,
            'descripcion'       => (string)$model->descripcion,
            /* place your other model properties here */

            'created_at'        => $model->created_at,
            'updated_at'        => $model->updated_at
        ];
    }
}