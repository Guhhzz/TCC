@extends('layouts.main')

@section('title', 'Virtual Events')

@section('content')

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>


        <h1>Projeto Evento</h1>
        <img src="/img/banner.jpg" alt="banner">
        @if(10 > 5)
              <p>A condição é true</p>
        @endif

        @endsection

