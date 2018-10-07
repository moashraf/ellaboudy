<!-- Video Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('video', 'Video:') !!}
    {!! Form::textarea('video', null, ['class' => 'form-control']) !!}
</div>

<!-- Project Id Field -->


<div class="form-group col-sm-6">
{!! Form::label('project_id', 'Select Project:') !!}

    <select name="project_id">
        @foreach($projects as $project)
        <option value="{{ $project->id }}">{{ $project->title}}</option>
         @endforeach
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.videoProjects.index') !!}" class="btn btn-default">Cancel</a>
</div>
