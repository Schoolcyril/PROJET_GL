@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <td>Année d'obtention</td>
                <td>{{$diplome->année_obtention}}</td>
            </tr>
            <tr>
                <td>Apprenant</td>
                <td>{{$diplome->apprenant_id}}</td>
            </tr>
            <tr>
                <td>Mention</td>
                <td>{{$diplome->mention}}</td>
            </tr>
        </table>
    </div>

@endsection
