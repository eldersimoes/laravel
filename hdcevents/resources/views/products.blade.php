@extends('layouts.main')

@section('title','Produtos')

@section('content')    

    <h1>Tela de produtos</h1>

    @if($busca != '')

        <p>O usuario esta buscando por: {{$busca}}</p>

    @endif

    <a href="/">Voltar para Home</a>

@endsection