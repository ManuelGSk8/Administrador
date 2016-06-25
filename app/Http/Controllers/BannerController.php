<?php
/**
 * Created by PhpStorm.
 * User: mgoicochea
 * Date: 14/08/15
 * Time: 2:55
 */
namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
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

    //Get listBanner
    public function listBanner()
    {
       /*

        $listaBanners = $this->repository->scopeQuery(function($query){
            return $query->Where('estado',1);
        })->paginate(10);
       */
        $listaBanners = $this->repository->paginate(10);
        $idEstadoActivacion = $this->repoParametro->findByField("nombrecorto",EnumParametro::Estado_Activacion);
        $listEstadActivacion = $this->repoParametro->findByField('padreid',$idEstadoActivacion[0]->id)->lists('nombre','valor');


        //dd($listaBanners);
        $listaBanners->setPath('consultaBanner');
        return view('Banner.consultarBanner',['listaBanners' => $listaBanners, 'listEstadActivacion' => $listEstadActivacion]);
    }


    public function BuscarBanner(Request $request)
    {
        $titulo = $request->titulo;
        $estado = $request->estado;
        $fecha_inicio = $request->fecha_inicio;
        $fecha_fin = $request->fecha_fin;

        $listaBanners = $this->repository->scopeQuery(function($query) use($titulo,$estado,$fecha_inicio,$fecha_fin){
            return $query->Where(function($querys) use($titulo,$estado,$fecha_inicio,$fecha_fin)
            {
                if($titulo){
                    $querys->Where('titulo',$titulo);
                }
                if($estado)
                {
                    $querys->Where('estado',$estado);
                }
                if($fecha_inicio)
                {
                    $querys->Where('fecha_inicio','>=',$fecha_inicio);
                }
                if($fecha_fin)
                {
                    $querys->Where('fecha_fin','<=',$fecha_fin);
                }
            });
        })->paginate(10);

        $idEstadoActivacion = $this->repoParametro->findByField("nombrecorto",EnumParametro::Estado_Activacion);
        $listEstadActivacion = $this->repoParametro->findByField('padreid',$idEstadoActivacion[0]->id)->lists('nombre','valor');


        //dd($listaBanners);
        $listaBanners->setPath('BuscarBanner');
        return view('Banner.consultarBanner',['listaBanners' => $listaBanners, 'listEstadActivacion' => $listEstadActivacion]);

    }


    //Get showCreateBanner

    public function showCreateBanner()
    {
        $idEstadoActivacion = $this->repoParametro->findByField("nombrecorto",EnumParametro::Estado_Activacion);
        $listEstadActivacion = $this->repoParametro->findByField('padreid',$idEstadoActivacion[0]->id)->lists('nombre','valor');


        //dd($idEstadoActivacion);

        //dd(EnumParametro::Estado_Activacion);



        return view('Banner.createBanner',compact('listEstadActivacion'));
    }

}