<div class="form-group {{ $errors->has('code_for') ? 'has-error' : ''}}">
    <label for="code_for" class="control-label">{{ 'Code de la formation' }}</label>
    <input class="form-control" name="code_for" type="text" id="code_for" value="{{ isset($formation->code_for) ? $formation->code_for : ''}}" required>
    {!! $errors->first('code_for', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nom_for') ? 'has-error' : ''}}">
    <label for="nom_for" class="control-label">{{ 'Nom de la Formation' }}</label>
    <input class="form-control" name="nom_for" type="text" id="nom_for" value="{{ isset($formation->nom_for) ? $formation->nom_for : ''}}" >
    {!! $errors->first('nom_for', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_debut') ? 'has-error' : ''}}">
    <label for="date_debut" class="control-label">{{ 'Date de debut' }}</label>
    <input class="form-control" name="date_debut" type="date" id="date_debut" value="{{ isset($formation->date_debut) ? $formation->date_debut : ''}}" required>
    {!! $errors->first('date_debut', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_fin') ? 'has-error' : ''}}">
    <label for="date_fin" class="control-label">{{ 'Date de fin' }}</label>
    <input class="form-control" name="date_fin" type="date" id="date_fin" value="{{ isset($formation->date_fin) ? $formation->date_fin : ''}}" >
    {!! $errors->first('date_fin', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <label>categorie</label>
    <select name="category_id" class=""  style="width: 100%;">
        <option value="" selected disabled>Choisissez une categorie</option>
        @foreach ($categories as $item)
        <option value="{{$item->id}}" @if (isset($formation) && $item->id ==$formation->category_id)
            selected
        @endif >{{$item->nom_cat}}</option>
        @endforeach
</select>
</div>

<div class="form-group">
        <label>Matieres</label>
        <select name="matiere_id[]" class="select2" multiple="multiple" data-placeholder="Choisissez les matieres de cette formation" style="width: 100%;">

            @foreach ($matieres as $item)
            <option value="{{$item->id}}"
                @if (isset($formation))
                @foreach ($formation->matieres as $matiere)
                    @if ($item->id ==$matiere->id)
                        selected
                    @endif
                @endforeach
            @endif >
            {{$item->nom}}</option>
            @endforeach
    </select>
</div>

<div class="form-group">
    <label>Enseignants</label>
    <select name="enseignant_id[]" class="select2" multiple="multiple" data-placeholder="Choisissez les enseignants de cette formations " style="width: 100%;">
        @foreach ($enseignants as $item)
        <option value="{{$item->id}}"
            @if (isset($formation))
            @foreach ($formation->enseignants as $enseignant)
                @if ($item->id ==$enseignant->id)
                    selected
                @endif
            @endforeach
        @endif >
        {{$item->nom}}</option>
        @endforeach
</select>
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
