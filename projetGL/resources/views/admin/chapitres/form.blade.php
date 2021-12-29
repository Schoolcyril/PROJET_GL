<div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
    <label for="titre" class="control-label">{{ 'Titre' }}</label>
    <input class="form-control" name="titre" type="text" id="titre" value="{{ isset($chapitre->titre) ? $chapitre->titre : ''}}" required>
    {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('resumé') ? 'has-error' : ''}}">
    <label for="resumé" class="control-label">{{ 'Résumé' }}</label>
    <textarea class="form-control" name="resumé"  id="resumé"  required>{{ isset($chapitre->resumé) ? $chapitre->resumé : ''}}</textarea>
    {!! $errors->first('resumé', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <label>Code matiere</label>
    <select name="matiere_id" class=""  style="width: 100%;">
        <option value="" selected disabled>Choisissez une matiere</option>
        @foreach ($matieres as $item)
        <option value="{{$item->id}}" @if (isset($chapitre) && $item->id == $chapitre->matiere_id)
            selected
        @endif >{{$item->code_matiere}}</option>
        @endforeach
</select>
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
