<div class="form-group {{ $errors->has('date_deb') ? 'has-error' : ''}}">
    <label for="date_deb" class="control-label">{{ 'Date Deb' }}</label>
    <input class="form-control" name="date_deb" type="text" id="date_deb" value="{{ isset($cour->date_deb) ? $cour->date_deb : ''}}" required>
    {!! $errors->first('date_deb', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_fin') ? 'has-error' : ''}}">
    <label for="date_fin" class="control-label">{{ 'Date Fin' }}</label>
    <input class="form-control" name="date_fin" type="text" id="date_fin" value="{{ isset($cour->date_fin) ? $cour->date_fin : ''}}" >
    {!! $errors->first('date_fin', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
