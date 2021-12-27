@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @foreach ($exam as $examen)
                    <div class="card-header">Examen{{ $examen->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/examen') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/examen/' . $examen->id . '/edit') }}" title="Edit Examen"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/examen' . '/' . $examen->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete examen" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $examen->id }}</td></tr>
                                    <tr><th> Date </th><td> {{ $examen->date }} </td></tr>
                                    <tr><th> Professeur </th><td> {{ $examen->nom }} </td></tr>
                                    <tr><th>Heure de debut </th><td> {{ $examen->Heure_deb }} </td></tr>
                                    <tr><th> Heure de fin </th><td> {{ $examen->Heure_fin }} </td></tr><br/>
                                </tbody>
                            </table>
                        </div>
                    @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
