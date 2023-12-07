@extends('layouts.landing')
@section('title', 'SAE - Sistema de Administracion escolar')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/style-index.css')}}">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="{{asset('assets/css/carousel.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
@endsection
@section('contenido')

    @component('_components.carousel')
        
    @endcomponent
    
    @component('_components.features')
        
    @endcomponent
    @component('_components.featurettes')
        
    @endcomponent
    
@endsection