<div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($matiere->nom) ? $matiere->nom : ''}}" required>
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('code_matiere') ? 'has-error' : ''}}">
    <label for="code_matiere" class="control-label">{{ 'Code Matiere' }}</label>
    <input class="form-control" name="code_matiere" type="text" id="code_matiere" value="{{ isset($matiere->code_matiere) ? $matiere->code_matiere : ''}}" required>
    {!! $errors->first('code_matiere', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nbre_heures') ? 'has-error' : ''}}">
    <label for="nbre_heures" class="control-label">{{ 'Nbre Heures' }}</label>
    <input class="form-control" name="nbre_heures" type="number" id="nbre_heures" value="{{ isset($matiere->nbre_heures) ? $matiere->nbre_heures : ''}}" >
    {!! $errors->first('nbre_heures', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <label>Nom enseignant</label>
    <select name="enseignant_id" class=""  style="width: 100%;">
        <option value="" selected disabled>Choisissez une enseignant</option>
        @foreach ($enseignants as $item)
        <option value="{{$item->id}}" @if (isset($matiere) && $item->id ==$matiere->enseignant_id)
            selected
        @endif >{{$item->nom}}</option>
        @endforeach
</select>
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
