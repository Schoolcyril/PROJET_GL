@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Matiere {{ $matiere->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/matieres') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/matieres/' . $matiere->id . '/edit') }}" title="Edit Matiere"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/matieres' . '/' . $matiere->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Matiere" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $matiere->id }}</td></tr>
                                    <tr><th> Nom </th><td> {{ $matiere->nom }} </td></tr>
                                    <tr><th> Code Matiere </th><td> {{ $matiere->code_matiere }} </td></tr>
                                    <tr><th> Nbre Heures </th><td> {{ $matiere->nbre_heures }} </td></tr><br/>
                                    <tr><th>N° CHAP </th><th>Titre </th><th> Résumé</th></tr>
                                    @foreach ($matiere->chapitres as $chapitre)
                                    <tr> <td>{{ $loop->iteration }}</td>
                                        <td> {{ $chapitre->titre }} </td>
                                        <td> {{ $chapitre->resumé }} </td></tr>
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
