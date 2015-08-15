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
use App\Repositories\Parametros\ParametrosRepositoryEloquent;
use App\Entities\Banners\Banners;
use App\Enums\EnumParametro;

class BannerController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    protected $repository;
    protected $repoParametro;

    public function __construct(BannerRepo $repository, ParametrosRepositoryEloquent $repoParametro)
    {
        $this->repository = $repository;
        $this->repoParametro = $repoParametro;

    }

    //Get showCreateBanner

    public function showCreateBanner()
    {
        $idEstadoActivacion = $this->repoParametro->findByField("nombrecorto",EnumParametro::Estado_Activacion)->select('id')->get();
        $listEstadActivacion = $this->repoParametro->findByField('padreid',$idEstadoActivacion[0]->id)->lists('nombre','valor');


        //dd($idEstadoActivacion);

        //dd(EnumParametro::Estado_Activacion);



        return view('Banner.createBanner',compact('listEstadActivacion'));
    }

}