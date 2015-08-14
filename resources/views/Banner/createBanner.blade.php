@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--
        <h1>
            Nuevo Banner
        </h1>
        -->
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-desktop"></i> Dashboard</a></li>
            <li><a href="#">Banner</a></li>
            <li class="active">Nuevo Banner</li>
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
                        <h3 class="box-title">Nuevo Banner</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    [[ Form::open(['route' => 'createBanner', 'method' => 'POST', 'role'=>'form', 'novalidate']) ]]
                        <div class="box-body">
                            <div class="form-group">
                                [[ Form::label('titulo', 'Título del Banner') ]]
                                [[ Form::text('titulo', '',['class' => 'form-control', 'id' => 'titulo']) ]]
                            </div>
                            <div class="form-group">
                                [[ Form::label('url_link', 'Link') ]]
                                [[ Form::text('url_link', '',['class' => 'form-control', 'id' => 'url_link']) ]]
                            </div>
                            <!-- Date range -->
                            <div class="form-group">
                                [[ Form::label('fecha_inicio', 'Fecha Inicio') ]]
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    [[ Form::text('fecha_inicio', '',['class' => 'form-control pull-right', 'id' => 'fecha_inicio']) ]]
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    [[ Form::close() ]]
                    <!--
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>-->
                </div><!-- /.box -->
            </div>
        </div>
    </section>
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
        });
    </script>
@stop