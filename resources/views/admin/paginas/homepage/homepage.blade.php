{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Páginas')

@section('content_header')
<h1>Administar página: <a href="{{ route('site.home') }}"><span>Homepage</span></a></h1>
@stop

@section('content')


<h1>Pontos turísticos</h1>
<hr />
<a href="{{ route('novo.pontoTuristico') }}" class="btn btn-success btn-novo"><i class="fas fa-plus"></i> Novo</a>
<div class="card card-primary">
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Local</th>
                    <th>País</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th width="300px">Ações</th>
                </tr>
            </thead>
            <tbody id="table-01"></tbody>
        </table>
    </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="{{ url(mix('admin/css/style.css')) }}">
@stop

@section('js')
<script src="{{ url(mix('admin/js/homepage.js')) }}" defer></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Authorization': 'Bearer ' + '{{  Auth::user()->api_token }}'
        }
    });
</script>
@stop
