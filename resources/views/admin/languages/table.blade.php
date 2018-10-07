<table class="table table-responsive" id="languages-table">
    <thead>
        <tr>
            <th>Language</th>
        <th>Is Default</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($languages as $language)
        <tr>
            <td>{!! $language->language !!}</td>
            <td> @if($language->is_default == "1") True @else False @endif</td>
            <td>
                {!! Form::open(['route' => ['admin.languages.destroy', $language->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.languages.show', [$language->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.languages.edit', [$language->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>