<div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($apprenant->nom) ? $apprenant->nom : ''}}" required>
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero_tel') ? 'has-error' : ''}}">
    <label for="numero_tel" class="control-label">{{ 'Numero Tel' }}</label>
    <input class="form-control" name="numero_tel" type="text" id="numero_tel" value="{{ isset($apprenant->numero_tel) ? $apprenant->numero_tel : ''}}" >
    {!! $errors->first('numero_tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($apprenant->email) ? $apprenant->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('adresse') ? 'has-error' : ''}}">
    <label for="adresse" class="control-label">{{ 'Adresse' }}</label>
    <input class="form-control" name="adresse" type="text" id="adresse" value="{{ isset($apprenant->adresse) ? $apprenant->adresse : ''}}" >
    {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('matricule') ? 'has-error' : ''}}">
    <label for="matricule" class="control-label">{{ 'Matricule' }}</label>
    <input class="form-control" name="matricule" type="text" id="matricule" value="{{ isset($apprenant->matricule) ? $apprenant->matricule : ''}}" >
    {!! $errors->first('matricule', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
