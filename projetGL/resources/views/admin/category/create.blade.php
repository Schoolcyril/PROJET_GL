@extends('layouts.app')
@section('content')
<div class="con">
    <form action="{{url('admin/category/ajout')}}" method="POST">
        @csrf
        <div class="col-md-12 form-group">
            <label for="" class="control-label">
                Nom:
            </label>
            <input type="text" name="nom_cat" class="form-control">
        </div>
        <div class="col-md-12 form-group">
            <label for="" class="control-label">
                Description:
            </label>
            <input type="text" name="description" class="form-control">

        </div>
        <div class="row form-group">
            <div class="col-md-5"></div>
            <div class="col-md-4">
                <button class="btn btn-success">Ajouter</button>
            </div>
        </div>
    </form>
</div>
@endsection
