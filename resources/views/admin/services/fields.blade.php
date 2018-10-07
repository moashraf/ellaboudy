
<!-- Title Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('title', 'Title English:') !!}
    {!! Form::text('title[en]', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('title', 'Title Arabic :') !!}
    {!! Form::text('title[ar]', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('description', 'Description English:') !!}
    {!! Form::textarea('description[en]', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('description', 'Description Arabic:') !!}
    {!! Form::textarea('description[ar]', null, ['class' => 'form-control']) !!}
</div>


<!-- Image Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('image', 'Image:') !!}
    <input type="file" name="image" >
    
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.services.index') !!}" class="btn btn-default">Cancel</a>
</div>
