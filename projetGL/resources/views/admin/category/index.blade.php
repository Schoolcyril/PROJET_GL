@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>nom</th>
                <th>description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

    @foreach ($data as $item)
        <tr><td>{{$item->nom_cat}}</td>
            <td>{{$item->description}}</td>
            <td>
                <a href="{{url('admin/category/edit/'.$item->id)}}" class="btn btn-info">edit</a>
                <a href="{{url('admin/category/detail/'.$item->id)}}" class="btn btn-info">detail</a>
                <a href="{{url('admin/category/delete/'.$item->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>
</div>
@endsection
