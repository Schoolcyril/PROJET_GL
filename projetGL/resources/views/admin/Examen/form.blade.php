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

<div class="form-group {{ $errors->has('formation_id') ? 'has-error' : ''}}">
<label for="code_for" >{{ 'Code formation:' }}</label>
<select name="formation_id" class="control-label" type="number" id="code_for">
    @foreach ($formations as $item)
    <option value="{{$item->id}}" @if (isset($examen) && $item->id ==$examen->formation_id)
        selected
    @endif >
         {{$item->code_for}}
  </option>
  @endforeach

</select>
</div>

<div class="form-group {{ $errors->has('matiere_id') ? 'has-error' : ''}}">
<label for="matiere_id" >{{ 'Matiere:' }}</label>
<select name="matiere_id" class="control-label" type="number" id="matiere_id">
    @foreach ($matieres as $item)
    <option value="{{$item->id}}" @if (isset($examen) && $item->id ==$examen->matiere_id)
        selected
    @endif >
         {{$item->code_matiere}}
  </option>
  @endforeach

</select>
{!! $errors->first('f', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
