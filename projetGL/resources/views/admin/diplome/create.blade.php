@extends('layouts.app')

@section('content')
    <div class="container1">
        <form action="{{url(isset($diplome)?'admin/diplome/update/'.$diplome->id:'admin/diplome/ajout')}}" method="POST">
            @csrf
            <div class="form-group col-md-12">
                <label for="année" class="control-label">Année d'obtention:</label>
            <input type="date" class="form-control" name="année_obtention" value="{{isset($diplome)?$diplome->année_obtention:""}}" required>
            </div>
            <div class=" form-group col-md-12">
                <label for="apprenant_id" class="control-label">Apprenant:</label>
                <select name="apprenant_id" id="apprenant_id" class="form-control">
                    <option value="" selected disabled>Choisissez un Apprenant</option>
                    @foreach ($apprenant as $item)
                    <option value="{{$item->id}}">{{$item->nom}}</option>
                    @endforeach
                </select>
            </div>

            <div class=" form-group col-md-12">
                <label for="mention" class="control-label">Mention:</label>
                <select name="mention" id="mention" class="form-control">
                    <option value="" selected disabled>Choisissez une mention</option>
                    <option value="passable" @if (isset($diplome) && $diplome->mention=='passable')
                        selected
                    @endif>Passable</option>
                    <option value="bien"@if (isset($diplome) && $diplome->mention=='bien')
                        selected
                    @endif>Bien</option>
                    <option value="tres bien"@if (isset($diplome) && $diplome->mention=='tres bien')
                        selected
                    @endif>Tres bien</option>
                    <option value="excellent"@if (isset($diplome) && $diplome->mention=='excellent')
                        selected
                    @endif>Excellent</option>
                </select>
            </div>
            <div class="row form-group">
                <div class="col-md-5"></div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success">{{isset($diplome)?'Modifier':'Ajouter'}}</button>

                </div>
            </div>
        </form>
    </div>
@endsection
