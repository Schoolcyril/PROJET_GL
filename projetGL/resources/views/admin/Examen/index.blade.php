@extends('layouts.app')
@section('content')
<div class="container">
<table border="1" class="table" >
    <thead >
        <td align="center">date</td>
        <td align="center">enseignant</td>
        <td align="center">Action</td>
    </thead>
    <tbody>


        <tr>
        @foreach ($data as $item )

            <td align="center">{{$item->examen}}</td>
            <td align="center">
                {{$item->enseignant_id}}
            <td align="center">
            <a href="{{url('admin/examen/delete' .'/'.$item->id)}}" class="btn btn-danger">supprimer</a>
            <a href="{{url('admin\examen\edit' .'/'.$item->id)}}" class="btn btn-info">modifier</a>
            <a href="{{url('admin\examen\detail'. '/' .$item->id)}}" class="btn btn-info">Details</a>
            </td>
        </tr>

        @endforeach


    </tbody>
</table>
    <a href={{url('admin\examen\create')}} class="btn btn-success" align='center'>Ajouter</a>
</div>

@endsection
