@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{url(isset($formation)?'admin/formation/update/'.$formation->id:'admin/formation/ajout')}}" method="POST">
            @csrf
            <div class="form-group col-md-12">
                <label for="nom_for" class="control-label">Nom_Formation:</label>
            <input type="text" class="form-control" name="nom_for" value="{{isset($formation)?$formation->nom_for:""}}" required>
            </div>
            <div class=" form-group col-md-12">
                <label for="categorie_id" class="control-label">:Categorie</label>
                <select  name="categorie_id" id="categorie_id" class="form-control">
                    <option value="" selected disabled>Choisissez une Categorie</option>
                    @foreach ($categorie as $item )
                <option value="`{{$item->id}}">$item->nom</option>

                    @endforeach
            </div>
            <div class="row form-group">
                <div class="col-md-5"></div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success">{{isset($formation)?'Modifier':'Ajouter'}}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
