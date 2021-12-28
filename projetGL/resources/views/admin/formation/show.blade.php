@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">Formation {{ $formation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/formation') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/formation/' . $formation->id . '/edit') }}" title="Edit Formation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/formation' . '/' . $formation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete formation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>identifiant de la formation:</th><td>{{ $formation->id }}</td></tr>
                                    <tr><th>Code de la formation:</th><td>{{ $formation->code_for }}</td></tr>
                                    <tr><th> Nom de la formation: </th><td> {{ $formation->nom_for }} </td></tr>
                                    <tr><th> Date de debut:</th><td> {{ $formation->date_debut }} </td></tr>
                                    <tr><th>Date de fin: </th><td> {{ $formation->date_fin }} </td></tr>
                                    <tr><th> nom de la categorie: </th><td> {{ $formation->category->nom_cat }} </td></tr><br/>
                                </tbody>
                            </table>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
