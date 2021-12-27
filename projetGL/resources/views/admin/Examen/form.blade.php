<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <input class="form-control" name="date" type="date" id="date" value="{{ isset($examen->date) ? $examen->date : ''}}" required>
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('d') ? 'has-error' : ''}}">
    <label for="d" class="control-label">{{ 'Heure de Debut:' }}</label>
    <input class="form-control" name="Heure_deb" type="time" id="Heure_deb" value="{{ isset($examen->Heure_deb) ? $examen->Heure_deb : ''}}" required>
    {!! $errors->first('d', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Heure_fin') ? 'has-error' : ''}}">
    <label for="Heure_fin" class="control-label">{{ 'Heure de Fin:' }}</label>
    <input class="form-control" name="Heure_fin" type="time" id="Heure_fin" value="{{ isset($examen->Heure_fin) ? $examen->Heure_fin : ''}}" >
    {!! $errors->first('f', '<p class="help-block">:message</p>') !!}
</div>
<label for="enseignant_id" >{{ 'Enseignant:' }}</label>
<select name="enseignant_id" class="control-label" type="number" id="enseignant_id">
    @foreach ($ens as $item)
    <option value="{{$item->id}}" @if (isset($examen) && $item->id ==$examen->enseignant_id)
        selected
    @endif >
         {{$item->nom}}
  </option>
  @endforeach

</select>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
