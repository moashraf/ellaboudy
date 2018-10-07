<!-- Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text', 'Label English:') !!}
    {!! Form::textarea('text[en]', null, ['class' => 'form-control']) !!}
</div>

<!-- Language Id Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text', 'Label Arabic:') !!}
    {!! Form::textarea('text[ar]', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.labels.index') !!}" class="btn btn-default">Cancel</a>
</div>
