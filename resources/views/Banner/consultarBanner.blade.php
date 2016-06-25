@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header" >

        <h1>
            Consulta de Banners
        </h1>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-desktop"></i> Dashboard</a></li>
            <li><a href="#" class="active">Consulta de Banners</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <button class="btn btn-app btnListar" type="button">
                            <i class="fa fa-th-list "></i> Listar
                        </button>
                        <button class="btn btn-app btnNuevo"  type="button">
                            <i class="fa fa-pencil "></i> Nuevo
                        </button>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        [[ Form::open(['route' => 'BuscarBanner', 'method' => 'POST', 'role'=>'form', 'novalidate']) ]]
                        <div class="form-group col-md-6">
                            [[ Form::label('titulo', 'Título del Banner') ]]
                            [[ Form::text('titulo', '',['class' => 'form-control', 'id' => 'titulo']) ]]
                        </div>
                        <div class="form-group col-md-6">
                            [[ Form::label('estado', 'Estado') ]]
                            [[ Form::select('estado',$listEstadActivacion,'',['class' => 'form-control', 'id' => 'estado']) ]]
                        </div>
                        <div class="form-group col-md-6">
                            [[ Form::label('fecha_inicio', 'Fecha Inicio') ]]
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                [[ Form::text('fecha_inicio', '',['class' => 'form-control pull-right', 'id' => 'fecha_inicio']) ]]
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <!-- Date Picker Fecha Fin -->
                        <div class="form-group col-md-6">
                            [[ Form::label('fecha_fin', 'Fecha Final') ]]
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                [[ Form::text('fecha_fin', '',['class' => 'form-control pull-right', 'id' => 'fecha_fin']) ]]
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <input type="submit" id="SubmitListar" style="display: none;">
                        [[ Form::close()]]
                    </div>
                    <div class="box-body">


                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Título</th>
                                    <th>Link</th>
                                    <th>Inicio</th>
                                    <th>Fin</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($listaBanners as $banner)
                                <tr>
                                    <td>{{$banner->id}}</td>
                                    <td>{{$banner->titulo}}</td>
                                    <td>{{$banner->url_link}}</td>
                                    <td>{{$banner->fecha_inicio}}</td>
                                    <td>{{$banner->fecha_fin}}</td>
                                    <td style="text-align: center;">
                                        @if($banner->estado == 1)
                                            <i class="fa fa-toggle-on fa-2x" style="color:#4D7EDF;"></i>
                                        @else
                                            <i class="fa fa-toggle-off fa-2x" style="color:#4D7EDF;"></i>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                        [[ $listaBanners->render() ]]
                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                    <div class="box-footer">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal">
        <div class="modal fade" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body&hellip;</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
@stop
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            //Date range picker
            /*
             $('#fecha_inicio').daterangepicker({
             singleDatePicker: true,
             showDropdowns: true
             });
             */

            $('#fecha_inicio').datepicker({
                autoclose: true,
                todayHighlight: true
            });

            $('#fecha_fin').datepicker({
                autoclose: true,
                todayHighlight: true
            });
        });

        /*********************************************************/
        $('.btnListar').click(function()
        {
            var btnSubmit = $('#SubmitListar');
            btnSubmit.click();

        });
        /**********************************************************/
        $('.btnNuevo').click(function()
        {
            alert('hol');
            $('.modal').modal('show');
        });






    </script>
@stop
