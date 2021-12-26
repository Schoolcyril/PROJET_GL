
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Liste Des Diplomes</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/diplome/create') }}" class="btn btn-success btn-sm" title="Add New Apprenant">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                        </a>

                        <form method="GET" action="{{ url('/admin/diplome') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
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
                                         {{$item->nom}}
                                     </td>
                                     <td>
                                         {{$item->mention}}
                                     </td>
                                     <td>
                                         <a class="btn btn-info" href="{{url('admin/diplome/detail/'.$item->id)}}">Details</a>
                                         <a class="btn btn-primary" href="{{url('admin/diplome/edit/'.$item->id)}}">Edit</a>

                                         <form method="POST" action="{{ url('/admin/diplome/delete/'. $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                             {{ method_field('DELETE') }}
                                             {{ csrf_field() }}
                                             <button type="submit" class="btn btn-danger btn-sm" title="Delete Apprenant" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                         </form>
                                     </td>
                                  </tr>
                                    @endforeach
                                 </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
