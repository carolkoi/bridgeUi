@isset($schedule)
    <input type="hidden" class="form-control" value="{{$schedule->id}}" name="maintenance_schedule_id">
@endisset
<table>
@foreach($schedule->checklists as $checklist)
    <tr>
        <td></td>
        <td></td>
        <td></td>

    </tr>
    <div class="form-group">

        <input type="checkbox" name="status"
            >{{$checklist->action}}
        <div class="form-group">
            {!! Form::label('comment', 'Comment') !!}
            {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
        </div>

{{--            <input type="text" name="su_{{$schedule->id}}_{{$checklist->id}}"--}}
{{--                   class="form-control">--}}

    </div>
</table>
@endforeach




