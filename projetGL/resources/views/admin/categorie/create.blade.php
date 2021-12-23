@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{url(isset($category)?'admin/category/update/'.$category->id:'admin/category/ajout')}}" method="POST">
            @csrf
            <div class="form-group col-md-12">
                <label for="nom" class="control-label">Nom:</label>
            <input type="text" class="form-control" name="nom_cat" value="{{isset($category)?$category->nom_cat:""}}" required>
            </div>
            <div class=" form-group col-md-12">
                <label for="description" class="control-label">Description:</label>
                <input type="text" class="form-control" name="description"  value="{{isset($category)?$category->description:""}}" required>
            </div>
            <div class="row form-group">
                <div class="col-md-5"></div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success">{{isset($category)?'Modifier':'Ajouter'}}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
