<?php

namespace App\Repositories\Parametros;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Parametros\Parametros;

/**
 * Class ParametrosRepositoryEloquent
 * @package namespace App\Repositories\Parametros;
 */
class ParametrosRepositoryEloquent extends BaseRepository implements ParametrosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Parametros::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria( app(RequestCriteria::class) );
    }
}