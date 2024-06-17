@extends('layouts.app')

@section('title','Aprendiendo laravel')

@push('css')
    <style>
        body{
            background-color: beige
        }
    </style>
@endpush

@push('css')
    <style>
        body{
            color: rgb(32, 42, 187)
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px4">

        <x-alert2 type="warning" class="mb-4">
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>
            contenido de la alerta
        </x-alert2>
        <p>hola</p>
        
        <a href="{{route('posts.index')}}" style="display: block; text-align: center; margin-top: 20px;">
            Ver los posts
        </a>
    </div>
@endsection




    

