@extends('layout.base')

@section('title')
    Editar Tipo de Recurso
@endsection

@section('page_icon')
    <i class="fa fa-gear"></i>
@endsection

@section('description')
    Altere o campo para editar um novo tipo de recuso.
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-8 col-md-offset-2'>
            <div class="box box-primary-ufop">
                <div class="box-body">
                    <form class="form" action="{{ route('tiporecurso.update', $tipo->id) }}" accept-charset="UTF-8" method="post">
                        {{ method_field('PATCH') }}

                        @include('tiporecurso.form')

                        <br />

                        <div class="text-center">
                            <button type="button" class="btn btn-danger" onClick="history.back()"><i class='fa fa-times'></i> Cancelar</button>
                            <button type="reset" class="btn btn-warning"><i class='fa fa-eraser'></i> Limpar</button>
                            <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
