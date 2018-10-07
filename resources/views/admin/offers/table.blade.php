<table class="table table-responsive" id="offers-table">
    <thead>
        <tr>
         <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($offers as $offer)
        <tr>
  			              <td>     <img src="{{ URL::to('/').'/'.$offer->image}}"  width="50" height="50">  </td>

            <td>
                {!! Form::open(['route' => ['admin.offers.destroy', $offer->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.offers.show', [$offer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.offers.edit', [$offer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>