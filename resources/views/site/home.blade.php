@extends('layouts.geral')

@section('content')
<div class="container">
    <div class="divider">
        <span>Pontos turísticos</span>
    </div>
    <div class="descricao-section">
        <span>Descubra pontos turísticos incríveis para a sua próxima viagem!</span>
    </div>
    <div class="destaques" id="div-pontos-turisticos"></div>
</div>
@endsection

@section('css')
{{-- <link href="{{asset('')}}" rel="stylesheet"> --}}
@stop

@section('js')
  <script src="{{ url(mix('site/js/homepage.js')) }}"></script>
@stop
