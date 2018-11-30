@extends('adminlte::page')

@section('title', 'Music List')

@section('content_header')
    <h1>Music</h1>
@stop

@section('content')
    <div class="box-body">
        <div class="box-title">
            <div class="col-lg-4">
                <a href="{{ route('admin.create') }}" class="btn btn-primary btn-lg">
                    <i class="fa fa-plus fa-lg"></i> Novo</a>
            </div>
        </div>
    </div>

    <div class="table table-bordered table-hover dataTable">
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Autor</th>
                <th>Titulo</th>
                <th>Genero</th>
                <th>Gravadora</th>
                <th>Cantor</th>
                <th>Album</th>
                <th>Status</th>
            </tr>
            <tbody>
            @foreach($musics as $music)
            <tr>
                <td>{{ $music->id }}</td>
                <td>{{ $music->date_music }}</td>
                <td>{{ $music->author }}</td>
                <td>{{ $music->title }}</td>
                <td>{{ $music->genre }}</td>
                <td>{{ $music->record_company }}</td>
                <td>{{ $music->interprete }}</td>
                <td>{{ $music->album }}</td>
                <td>
                    <a href="{{ route('admin.edit', $music->id) }}" class="btn btn-primary">Editar</a>
                    <a href="{{ route('admin.delete', $music->id) }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/vendor/js/adminlte.min.js') }}"></script>
    @stack('js')
    @yield('js')
@stop

