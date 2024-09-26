@extends('layouts.app')

@section('title', 'Laravel 11')

@push('css')
    <style>
        body{
            color: red;
            background-color: lightblue
        }
    </style>
@endpush

@section('content')
<div class="max-w-4xl mx-auto">
    <h1>Bienvenido a la pagina principal</h1>
    <x-alert2 type="info" class="mb-4">
        <x-slot name="title">
            Titulo de la alerta
        </x-slot>
        Contenido de la alerta
    </x-alert2>
    <p>Hola mundo</p>
    </div>
@endsection

