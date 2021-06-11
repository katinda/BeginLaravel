@extends('base')

@section('title','About Us |'. config('app.name'))

@section('content')

    <img src="{{ asset('/images/profil.png') }}" alt="Profil" class=" my-12 rounded-full shadow-md h-64">

    <h2 class="mb-5 text-gray-700">
    Built with <span class="text-pink-500">&hearts;</span>  by LOLO
    </h2>

    <p>

    <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">
    Revenir a la page d'acueil</a>

    </p>

@endsection