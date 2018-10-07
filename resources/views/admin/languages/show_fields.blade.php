<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $language->id !!}</p>
</div>

<!-- Language Field -->
<div class="form-group">
    {!! Form::label('language', 'Language:') !!}
    <p>{!! $language->language !!}</p>
</div>

<!-- Is Default Field -->
<div class="form-group">
    {!! Form::label('is_default', 'Is Default:') !!}
    <p>{!! $language->is_default !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $language->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $language->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $language->deleted_at !!}</p>
</div>

