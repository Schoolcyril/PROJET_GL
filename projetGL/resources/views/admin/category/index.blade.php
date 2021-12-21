@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($data as $item ){
                <tr>
                    <td>{{$item->nom_cat}}</td>
                    <td>{{$item->description}}</td>
                </tr>

          }
          @endforeach
        </tbody>
    </table>
</div>
@endsection
