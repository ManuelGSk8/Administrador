<?php

namespace App\Http\Controllers;

//use Illuminate\Routing\Controller;
use App\Http\Controllers;
use App\Repositories\Banners\BannersRepositoryEloquent as BannerRepo;
use App\Entities\Banners\Banners;

 class HomeController extends Controller
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

    public function index()
    {
        return view('Home.home');
    }

    public function repoTest()
    {
        $Banner = new Banners;
        $Banner->titulo = 'Banners Titulo 2';
        $Banner->url_link = 'url link';
        $Banner->fecha_inicio = '2015-08-01 00:00:00';
        $Banner->fecha_fin = '2015-08-01 00:00:00';
        $Banner->estado = 1;
        //$Banner->created_at = '2015-08-01 00:00:00';
        //$Banner->updated_at = '2015-08-01 00:00:00';
        $Banner->save();

        $ban =['titulo' =>'Banners Titulo 10','url_link' =>'url link array','fecha_inicio' =>'2015-08-02 00:00:00',
        'fecha_fin' =>'2015-08-02 00:00:00','estado' =>1];

/*
        $ban =['Banners Titulo 3','url link array','2015-08-02 00:00:00',
        '2015-08-02 00:00:00',1,'2015-08-02 00:00:00','2015-08-02 00:00:00'];
*/
        $this->repository->create($ban);

        //$this->repository->create($Banner);
        $posts = $this->repository->all();

        return \Response::json($posts);

    }

}
