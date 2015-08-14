<?php

namespace App\Repositories\Banners;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Banners\Banners;

/**
 * Class BannersRepositoryEloquent
 * @package namespace App\Repositories\Banners;
 */
class BannersRepositoryEloquent extends BaseRepository implements BannersRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Banners::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria( app(RequestCriteria::class) );
    }
}