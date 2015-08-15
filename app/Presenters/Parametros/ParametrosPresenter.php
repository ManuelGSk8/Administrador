<?php

namespace App\Presenters\Parametros;

use App\Transformers\Parametros;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ParametrosPresenter
 *
 * @package namespace App\Presenters\Parametros;
 */
class ParametrosPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ParametrosTransformer();
    }
}
