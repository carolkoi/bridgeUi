@if($resolved_status)
    <a href="{{ route('tickets.view', $id) }}" class='btn btn-default btn-sm'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
@elseif($assign_to)
    <a href="{{ url('tickets/assign/'.$id) }}" class='btn btn-primary'>
        Reassign</i>
    </a>
    @else
{{--{!! Form::open(['route' => ['tickets.destroy', $id], 'method' => 'delete']) !!}--}}
{{--<div class='btn-group'>--}}
{{--    <a href="{{ route('tickets.show', $id) }}" class='btn btn-default btn-xs'>--}}
{{--        <i class="glyphicon glyphicon-eye-open"></i>--}}
{{--    </a>--}}

    <a href="{{ url('tickets/assign/'.$id) }}" class='btn btn-primary'>
        Assign</i>
    </a>
{{--    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [--}}
{{--        'type' => 'submit',--}}
{{--        'class' => 'btn btn-danger btn-xs',--}}
{{--        'onclick' => "return confirm('Are you sure?')"--}}
{{--    ]) !!}--}}
{{--</div>--}}
{!! Form::close() !!}
    @endif

