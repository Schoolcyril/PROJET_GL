@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Examens</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/examen/create') }}" class="btn btn-success btn-sm" title="Add New Matiere">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/examen') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Heure de debut</th>
                                        <th>Heure de fin</th>
                                        <th>Matiere</th>
                                        <th>Code formation</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($examens as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->Heure_deb }}</td>
                                        <td>{{ $item->Heure_fin }}</td>
                                        <td>{{ $item->matiere->code_matiere }}</td>
                                        <td>{{ $item->formation->code_for }}</td>


                                        <td>
                                            <a href="{{ url('/admin/examen/' . $item->id) }}" title="View Examen"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/examen/' . $item->id . '/edit') }}" title="Edit Examen"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <a href="{{ url('/admin/notes/' . $item->id . '/edit') }}" title="Edit Examen"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Remplir Notes </button></a>

                                            <form method="POST" action="{{ url('/admin/examen' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Examen" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
@endsection
