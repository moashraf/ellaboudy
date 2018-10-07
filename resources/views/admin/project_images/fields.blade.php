

<!-- Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('image', 'Image:') !!}
    <input type="file" name="image" /> 
</div>

<!-- Project Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_id', 'Project Id:') !!}
    <select name="project_id">
        @foreach($projects as $project)
            <option value="{{ $project->id }}">{{ $project->title}}</option>
         @endforeach
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.projectImages.index') !!}" class="btn btn-default">Cancel</a>
</div>
