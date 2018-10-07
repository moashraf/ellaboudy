<table class="table table-responsive" id="projectImages-table">
    <thead>
        <tr>
        <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($projectImages as $projectImage)
        <tr>
            <td>            <image src="{{ asset($projectImage->image) }}" alt="banner" style="width:25%"/> </td></td>
            <td>
                {!! Form::open(['route' => ['admin.projectImages.destroy', $projectImage->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.projectImages.show', [$projectImage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.projectImages.edit', [$projectImage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>