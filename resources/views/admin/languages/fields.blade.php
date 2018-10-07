<!-- Language Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language', 'Language:') !!}
    {!! Form::text('language', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Default Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_default', 'Is Default:') !!}
    {!! Form::number('is_default', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.languages.index') !!}" class="btn btn-default">Cancel</a>
</div>
