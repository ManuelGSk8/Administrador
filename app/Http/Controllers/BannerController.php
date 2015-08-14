<?php
/**
 * Created by PhpStorm.
 * User: mgoicochea
 * Date: 14/08/15
 * Time: 2:55
 */
namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Repositories\Banners\BannersRepositoryEloquent as BannerRepo;
use App\Entities\Banners\Banners;

class BannerController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    protected $repository;

    public function __construct(BannerRepo $repository)
    {
        $this->repository = $repository;

    }

    //Get showCreateBanner

    public function showCreateBanner()
    {

        return view('Banner.createBanner');
    }

}