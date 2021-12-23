@extends('layouts.app')

@section('content')
     <div class="container">
         <table class="table">
             <thead>
                 <tr>
                    <th>Année d'obtention:</th>
                    <th>Apprenant:</th>
                    <th>Mention:</th>
                 </tr>

             </thead>
             <tbody>
               @foreach ($data as $item)
               <tr>
                <td>
                    {{$item->année_obtention}}
                </td>
                <td>
                    {{$item->apprenant_id}}
                </td>
                <td>
                    {{$item->mention}}
                </td>
                <td>
                    <a class="btn btn-info" href="{{url('admin/diplome/details/'.$item->id)}}">Details</a>
                    <a class="btn btn-primary" href="{{url('admin/diplome/edit/'.$item->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{url('admin/diplome/delete/'.$item->id)}}">Delete</a>
                </td>
             </tr>
               @endforeach
             </tbody>
         </table>
     </div>
@endsection
