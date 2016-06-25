<!-- Content Header (Page header) -->
    <section class="content-header" style="height:30px;">
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
                            <div class="form-group col-md-12">
                                [[ Form::label('titulo', 'Título del Banner') ]]
                                [[ Form::text('titulo', '',['class' => 'form-control', 'id' => 'titulo']) ]]
                            </div>
                            <div class="form-group col-md-12">
                                [[ Form::label('url_link', 'Link') ]]
                                [[ Form::text('url_link', '',['class' => 'form-control', 'id' => 'url_link']) ]]
                            </div>
                            <!-- Date Picker Fecha Inicio -->
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
                            <div class="form-group col-md-12">
                                [[ Form::label('estado', 'Estado') ]]
                                [[ Form::select('estado',$listEstadActivacion,'',['class' => 'form-control', 'id' => 'estado']) ]]
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputFile">Slider</label>
                                <input type="file" id="exampleInputFile" accept="image/*">
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
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
    </script>
@stop