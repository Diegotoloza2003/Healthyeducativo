@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'playvideo')

@section('content')
<link href="../resources/assets/css/video.css" type="text/css" rel="stylesheet">
<style>
  .play-video{ 
    position: relative;
    overflow: hidden;
    width: 100%;
    padding-bottom: 56.25%;
    height:0;
   }

   .play-video iframe{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    }
  </style>
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
        <a href="http://healthyamerica-001-site1.ftempurl.com/registro_de_alumnos.php">ENLACE PARA REALIZAR EL EXAMEN</a>
    </div>
</div>
    <hr>
    <div class="vid-description">
      {{ $video->description }}
    </div>
    <hr>
</div>
@endsection
