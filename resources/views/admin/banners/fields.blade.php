<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title English:') !!}
    {!! Form::text('title[en]', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title Arabic:') !!}
    {!! Form::text('title[ar]', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description English:') !!}
    {!! Form::text('description[en]', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description Arabic:') !!}
    {!! Form::text('description[ar]', null, ['class' => 'form-control']) !!}
</div>


<!-- Btn Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('btn_text', 'Button Text English:') !!}
    {!! Form::text('btn_text[en]', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('btn_text', 'Button Text Arabic:') !!}
    {!! Form::text('btn_text[ar]', null, ['class' => 'form-control']) !!}
</div>



<!-- Project Route Field -->
<div class="form-group col-sm-6">
{!! Form::label('project_route', 'Select Project:') !!}

    <select name="project_route">
        @foreach($projects as $project)
        <option value="{{ $project->id }}">{{ $project->title}}</option>
         @endforeach
    </select>
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Upload Image Banner:') !!}
    <input type="file" name="image" />
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.banners.index') !!}" class="btn btn-default">Cancel</a>
</div>
