@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'playvideo')

@section('content')
<link href="../resources/assets/css/video.css" type="text/css" rel="stylesheet">

<div class="container play-container">
     <div class="row">
        <div class="play-video">
          <iframe width="1000" height="500" 
          src="{{ $video->link }}?controls=0" 
          frameborder="0" title="YouTube video player"  
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen>
          </iframe>
        </div>
    </div>
    <h3>{{ $video->titulo }}</h3>
<hr>
<div class="publisher">
    
    <div>
        <a href="http://192.168.26.38/Sistema%20de%20examenes/registro_de_alumnos.php">ENLANCE PARA REGISTRARME AL EXAMEN</a>
    </div>
</div>
    <hr>
    <div class="vid-description">
      {{ $video->description }}
    </div>
    <hr>
</div>
@endsection
