<table class="table table-responsive" id="videoProjects-table">
    <thead>
        <tr>
            <th>Video</th>
        <th>Project Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($videoProjects as $videoProject)
        <tr>
            <td>
            <iframe data-u="image" src="https://www.youtube.com/embed/{{  $videoProject->video }}" width="" height="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </td>
            
            <td>{!! $videoProject->project_id !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.videoProjects.destroy', $videoProject->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.videoProjects.show', [$videoProject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.videoProjects.edit', [$videoProject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>