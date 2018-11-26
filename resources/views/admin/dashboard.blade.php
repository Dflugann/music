@extends('adminlte::page')

@section('title', 'Music List')

@section('content_header')
    <h1>Music</h1>
@stop

@section('content')

    <div class="table table-bordered table-hover dataTable">
        <table class="table table-hover">
            <tbody><tr>
                <th>ID</th>
                <th>User</th>
                <th>Date</th>
                <th>Status</th>
                <th>Reason</th>
            </tr>
            <tr>
                <td>183</td>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Approved</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
            <tr>
                <td>219</td>
                <td>Alexander Pierce</td>
                <td>11-7-2014</td>
                <td><span class="label label-warning">Pending</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
            <tr>
                <td>657</td>
                <td>Bob Doe</td>
                <td>11-7-2014</td>
                <td><span class="label label-primary">Approved</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
            <tr>
                <td>175</td>
                <td>Mike Doe</td>
                <td>11-7-2014</td>
                <td><span class="label label-danger">Denied</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
            </tbody></table>
    </div>

@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/vendor/js/adminlte.min.js') }}"></script>
    @stack('js')
    @yield('js')
@stop

