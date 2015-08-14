<?php

namespace App\Presenters\Banners;

use App\Transformers\Banners;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class BannersPresenter
 *
 * @package namespace App\Presenters\Banners;
 */
class BannersPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new BannersTransformer();
    }
}
