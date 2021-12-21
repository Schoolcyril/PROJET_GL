@extends('layouts.app')

@section('content')
     <div class="container">
         <table class="table">
             <thead>
                 <tr>
                    <th>nom:</th>
                    <th>description:</th>
                    <th>action:</th>
                 </tr>

             </thead>
             <tbody>
               @foreach ($data as $item)
               <tr>
                <td>
                    {{$item->nom_cat}}
                </td>
                <td>
                    {{$item->description}}
                </td>
                <td>
                    <a class="btn btn-info" href="{{url('admin/category/details/'.$item->id)}}">Details</a>
                    <a class="btn btn-primary" href="{{url('admin/category/edit/'.$item->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{url('admin/category/delete/'.$item->id)}}">Delete</a>
                </td>
             </tr>
               @endforeach
             </tbody>
         </table>
     </div>
@endsection
