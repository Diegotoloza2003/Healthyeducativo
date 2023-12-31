@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
  <link href="../resources/assets/css/imgrec.css" type="text/css" rel="stylesheet">

 
    <form class="d-flex" role="search flaot-right">


         <div class="container">
            <div class="conten">
                <h1><i class="fa-brands fa-youtube"></i>HEALTHY EDUCATIVO</h1>
                 <a class="btn" target="_blank" rel="noopener noreferrer"
                    href="https://192.168.20.31/Healthy/public/login">SOLO PERSONAL COMERCIAL</a>
            </div>
            <hr>
            @forelse ($categorias as $category)
        <h1><i class="fa-solid fa-heart-pulse"></i> {{ $category->name }}</h1>
        <div class="list-container">
            @forelse ($category->videos as $video)
                <div class="vid-list">
                    <a class="btn btn-sm btn-outline"href="{{ route('videos.show', $video->id) }}">
                        <img width="300" height="200"
                            src="{{ asset('storage/' . $video->miniatura) ?? 'img/default.jpg' }}" class="thumbnail" alt="">
                    </a>
                    <div class="flex-div">
                        <a>{{ $video->titulo }}</a>
                        <div class="vid-info">
                            <p>Universidad de Healthy</p>
                        </div>
                    </div>
                </div>
            @empty
                <p>No hay videos disponibles.</p>
            @endforelse
        </div>
    @empty
        <p>No hay videos disponibles.</p>
    @endforelse
    <div>
        
<hr>

  <script>
    document.getElementById('search').addEventListener('keydown', function() {
      // Verificar si la tecla presionada es Enter (código de tecla 13) Corresponde al enter
      if (event.keyCode === 13) {
        // Obtén los parámetros actuales de la URL
        var urlParams = new URLSearchParams(window.location.search);

        // Establece el nuevo valor para el parámetro 'search'
        urlParams.set('search', this.value);

        // Actualiza la URL en la barra de direcciones con el nuevo parámetro
        var newURL = window.location.pathname + '?' + urlParams.toString();
        window.history.pushState({}, '', newURL);

        // Carga la URL actualizada
        window.location.href = newURL;
      }
    });
  </script>

@endsection
