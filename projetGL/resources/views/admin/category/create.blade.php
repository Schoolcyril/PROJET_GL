@extends('layouts.app')
@section('content')
<div class="con">
<form action="{{url(isset($category)?'admin/category/update/'.$category->id:'admin/category/ajout')}}" method="POST">
    @csrf
<div class="col-md-12 form-group">
    <label for="nom" class="control-label" >Nom:</label>
<input type="text" name="nom_cat" class="form-control" value="{{isset($category)?$category->nom_cat:""}}">
</div>
<div class="col-12">
    <label for="description" class="control-label" >Description:</label>
<input type="text" name="description" class="form-control" value="{{isset($category)?$category->description:""}}">
</div><br> <br>

<div class="row form-group">
<div class="col-md-5">
    <div class="col-md-6">
    <button class="btn btn-success">{{isset($category)?'Modifier':'Ajouter'}}</button>
    </div>
</div>
</div>
 </form>

</div>

@endsection
