<table class="table table-responsive" id="services-table">
    <thead>
        <tr>
            <th>Image</th>
        <th>Title</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
        <td>            <image src="{{ asset($service->image) }}" alt="banner" style="width:25%"/> </td></td>
            <td>{!! $service->title !!}</td>
            <td>{!! $service->description !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.services.destroy', $service->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.services.show', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                     {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>