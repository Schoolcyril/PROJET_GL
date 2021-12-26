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

<div class="form-group {{ $errors->has('matiere_nom') ? 'has-error' : ''}}">
    <label for="matiere_nom" class="control-label">{{ 'matiere_nom' }}</label>
    <input class="form-control" name="matiere_nom" type="text" id="matiere_nom" value="{{ isset($chapitre->matiere_id) ? $chapitre->matiere->nom : ''}}" >
    {!! $errors->first('matiere_nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
