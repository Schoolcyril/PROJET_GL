@extends('layouts.app')
@section('content')
<div class="con">
<form method="POST" action="{{ url('/admin/examen/update'.'/'. $examen->id) }}" >
    @csrf
<div class="col-md-12 form-group">
<label for="examen" class="control-label"  >Date:</label>
<input type="" name="examen" class="form-control" value='{{$examen->examen}}'>
</div>
<div class="col-12">
    <label for="" class="control-label" >Enseignant:</label>
<input type="integer" name="enseignant_id" value='{{$examen->enseignant_id}}' class="form-control" >
</div><br> <br>

<div class="row form-group">
<div class="col-md-5">
    <div class="col-md-12">
    <button class="btn btn-success">Enregistrer</button>
    </div>
</div>
</div>
 </form>

</div>

@endsection
