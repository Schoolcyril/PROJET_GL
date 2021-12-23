@extends('layouts.app')
@section('content')
Identifiant de l'examen: {{$examen->id}} <br>
Date de l'examen: {{$examen->examen}} <br>
Date de programmation de l'examen: {{$examen->created_at}} <br>
Donner par: Mr {{$examen->enseignant_id}} <br><br><br><br>

<a href="{{url('admin/examen/')}}" class="btn btn-info">Retour</a>
@endsection
