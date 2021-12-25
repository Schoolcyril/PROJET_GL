@extends('layouts.app')
@section('content')
@foreach ($data as $item)
Identifiant de l'examen: {{$item->id}} <br>
Date de l'examen: {{$item->examen}} <br>
Date de programmation de l'examen: {{$item->created_at}} <br>
Donner par: Mr {{$item->nom}} <br><br><br><br>
@endforeach

<a href="{{url('admin/examen/')}}" class="btn btn-info">Retour</a>
@endsection
