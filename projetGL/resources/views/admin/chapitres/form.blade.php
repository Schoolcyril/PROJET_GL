<div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
    <label for="titre" class="control-label">{{ 'Titre' }}</label>
    <input class="form-control" name="titre" type="text" id="titre" value="{{ isset($chapitre->titre) ? $chapitre->titre : ''}}" required>
    {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('resumé') ? 'has-error' : ''}}">
    <label for="resumé" class="control-label">{{ 'Résumé' }}</label>
    <textarea class="form-control" name="resumé"  id="resumé" value="{{ isset($chapitre->resumé) ? $chapitre->resumé : ''}}" required></textarea>
    {!! $errors->first('resumé', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
