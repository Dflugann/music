@extends('adminlte::page')

@section('title', 'Adicionar Musica')

@section('content_header')
    <h1>Musicas</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <div class="text-body">
                <h3>Adicionar Musicas</h3>
            </div>
            <div class="box-body">
                    {!! Form::open(['url' => ((!empty($music))  ? $urlSubmit . $music->id : $urlSubmit),'method' => $method, 'class' => 'form-horizontal']) !!}

                    {{ (!empty($music)) ? method_field('PUT') : '' }}

                    <div class="row">
                        <div class="form-group ">
                            <div class="col-lg-2">

                                {!! Form::date('date_music', (!empty($music))  ? $music->date_music : '', ['class' => 'form-control', 'placeholder'=> 'Data Composição']) !!}
                            </div>
                            <div class="col-lg-4">
                                {!! Form::text('author', (!empty($music))  ? $music->author : '', ['class' => 'form-control', 'placeholder'=> 'Compositor']) !!}
                            </div>
                            <div class="col-lg-4 ">
                                {!! Form::text('title', (!empty($music))  ? $music->title : '', ['class' => 'form-control', 'placeholder'=> 'Titulo da musica']) !!}
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2">
                                {!! Form::text('genre', (!empty($music))  ? $music->genre : '', ['class' => 'form-control', 'placeholder'=> 'Genêro']) !!}
                            </div>
                            <div class="col-lg-2 ">
                                {!! Form::text('record_company', (!empty($music))  ? $music->record_company : '', ['class' => 'form-control', 'placeholder'=> 'Gravadora']) !!}
                            </div>
                            <div class="col-lg-2 ">
                                {!! Form::text('interprete', (!empty($music))  ? $music->interprete : '', ['class' => 'form-control', 'placeholder'=> 'Interprete']) !!}
                            </div>
                            <div class="col-lg-4 ">
                                {!! Form::text('album', (!empty($music))  ? $music->album : '', ['class' => 'form-control', 'placeholder'=> 'Album']) !!}
                            </div>
                        </div>
                    </div>
                        @if(!empty($music))
                            {!! Form::Submit("Atualizar",['class'=> 'btn btn-primary']) !!}
                        @else
                            {!! Form::Submit("Salvar",['class'=> 'btn btn-info']) !!}
                            @endif
                    {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>


@stop