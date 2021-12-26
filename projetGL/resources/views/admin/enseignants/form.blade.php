<div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($enseignant->nom) ? $enseignant->nom : ''}}" required>
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero_tel') ? 'has-error' : ''}}">
    <label for="numero_tel" class="control-label">{{ 'Numero Tel' }}</label>
    <input class="form-control" name="numero_tel" type="text" id="numero_tel" value="{{ isset($enseignant->numero_tel) ? $enseignant->numero_tel : ''}}" >
    {!! $errors->first('numero_tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($enseignant->email) ? $enseignant->email : ''}}" required>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('adresse') ? 'has-error' : ''}}">
    <label for="adresse" class="control-label">{{ 'Adresse' }}</label>
    <input class="form-control" name="adresse" type="text" id="adresse" value="{{ isset($enseignant->adresse) ? $enseignant->adresse : ''}}" >
    {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('domaine') ? 'has-error' : ''}}">
    <label for="domaine" class="control-label">{{ 'Domaine' }}</label>
    <input class="form-control" name="domaine" type="text" id="domaine" value="{{ isset($enseignant->domaine) ? $enseignant->domaine : ''}}" >
    {!! $errors->first('domaine', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
        <label>Matieres</label>
        <select name="matiere_id[]" class="select2" multiple="multiple" data-placeholder="Choisissez vos matieres" style="width: 100%;">
            @foreach ($matiere as $item)
            <option value="{{$item->id}}">{{$item->nom}}</option>
            @endforeach
    </select>
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
