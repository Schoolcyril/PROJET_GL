@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table">
        <tr>
            <td>nom:</td>
            <td>{{$category->nom_cat}}</td>
        </tr>
        <tr>
            <td>description:</td>
            <td>{{$category->description}}</td>
        </tr>
        <tr>
            <td>datecreation:</td>
            <td>{{$category->created_at}}</td>
        </tr>
    </table>
</div>
@endsection
