<table class="table table-responsive" id="labels-table">
    <thead>
        <tr>
            <th>Text</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($labels as $label)
        <tr>
            <td>
                 <p style="     width: 27%; "> 
                {!!$label->text["en"]!!}
                <br>
                {!! $label->text["ar"] !!}
                                 </p> 

            </td>
            <td>
                {!! Form::open(['route' => ['admin.labels.destroy', $label->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.labels.show', [$label->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.labels.edit', [$label->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                 </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>