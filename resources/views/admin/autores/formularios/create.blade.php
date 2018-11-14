@extends('admin.partes.index') @section('title') Autor @endsection 

@section('content')

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Registrar Autor
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Administración</a>
            </li>
            <li class="active">Autores</li>
        </ol>
    </section>

    <!-- Inicio formulario de Autor -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="box box-primary">
                    <div class="box-body ">                            
                        @include('admin.partes.msj_acciones')

                        <!-- Form de creación de Autor -->
                        <form action="/admin/autores" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row"> 

                                <!-- Campo para titulo -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" name="nombre" class="form-control" placeholder="Campo obligatorio" required>
                                    </div>
                                </div>

                                <!-- Campo para titulo -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Apellido</label>
                                        <input type="text" name="apellido" class="form-control" placeholder="Campo obligatorio" required>
                                    </div>
                                </div>

                                <!-- Campo para nacionalidad -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Nacionalidad</label>
                                        <input type="text" name="nacionalidad" class="form-control" placeholder="Campo obligatorio" required>
                                    </div>
                                </div>
                                
                                <!-- Campo para redaccion de biografía -->
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Biografia</label>
                                        <textarea maxlength="5000" id="biografia" name="biografia" placeholder="Escriba aquí la biografia..." style="width: 100%;" rows="10" required></textarea>
                                    </div>
                                </div>

                                <!-- Campo para carga de imagen -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Imágen de perfil</label>
                                        <input name="imagen" id="imagen" type="file" class="" >
                                    </div>
                                </div>

                                <button id="boton_submit_create" type="submit" class="btn btn-primary hide"></button>
                            </div> 
                        </form>
                        <br>
                        <!-- Footer con boton de registro -->

                        <div class="box-footer">
                            <div class="row pull-right">
                                <div class="col-md-12">
                                    <a href="http://localhost:8000/admin/autores" title="Volver a la pantalla anterior" class="btn btn-default"><i class="fa fa-trash"></i>  Descartar</a>
                                    <button type="button" class="btn btn-primary" onclick="$('#boton_submit_create').click()">
                                        <i class="fa fa-plus-circle"></i> &nbsp;Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                               
            </div>
    </section>
</div>


@endsection 

@section('script')
<script src="{{ asset('js/Autores.js') }}"></script>
@endsection