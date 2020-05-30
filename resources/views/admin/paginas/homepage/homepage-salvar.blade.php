{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Páginas')

@section('content_header')
<h1>Administar página: <a href="{{ route('site.home') }}"><span>Homepage</span></a></h1>
@stop

@section('content')
  @if($action == 'update')
    <h1>Editar Ponto turístico</h1>
  @else
    <h1>Novo Ponto turístico</h1>
  @endif

<hr />
<div class="card">
    <form role="form" action="@if ($action == 'update') {{ route('edit.pontoTuristico', ['id' => $pt->id]) }} @else {{ route('salvar.pontoTuristico') }} @endif" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    @if($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach
                    @endif

                    <div class="form-group">
                        <label for="pais">País</label>
                        <input type="text" class="form-control" id="pais" value="@if($action == 'update') {{$pt->name}} @endif" name="pais" placeholder="Ex: Brasil">
                    </div>
                    <div class="form-group">
                        <label for="local">Local</label>
                        <input type="text" class="form-control" id="local" value="@if($action == 'update') {{$pt->email}} @endif" name="local" placeholder="Ex: Pão de açúcar">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" id="descricao" value="@if($action == 'update') {{$pt->razao_social}} @endif" name="descricao">
                    </div>
                    <div class="form-group">
                        <label for="imagem">Imagem</label><br />
                        <input type="file" class="" id="imagem" value="" name="imagem">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">@if($action == 'update') Atualizar @else Cadastrar @endif</button>
        </div>
    </form>
</div>

@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@stop

@section('js')
<script src="{{ asset('js/admin/paginas/homepage.js') }}" defer></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Authorization': 'Bearer ' + '{{  Auth::user()->api_token }}'
        }
    });
</script>
@stop
