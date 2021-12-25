@extends('layouts.app')
@section('content')
<div class="con">
<form method="POST" action="{{ url('/admin/examen/update'.'/'. $examen->id) }}" >
    @csrf
<div class="col-md-12 form-group">
<label for="examen" class="control-label"  >Date:</label>
<input type="date" name="examen" class="form-control" value='{{$examen->examen}}'>
</div>
<div class="col-12">
    <label for="enseignant_id" class="control-label" >Enseignant:</label>

    <select name="enseignant_id" id="">
        @foreach ($enseignant as $ens)
          <option value="{{$ens->id}}">
             {{$ens->nom}}
          </option>
        @endforeach
    </select>
</div><br> <br>

<div class="row form-group">
<div class="col-md-5">
    <div class="col-md-12">
    <button class="btn btn-success">Enregistrer</button>
    <a class="btn btn-info" href={{ url('/admin/examen') }}>Retour</a>
    </div>
</div>
</div>
 </form>

</div>

@endsection
