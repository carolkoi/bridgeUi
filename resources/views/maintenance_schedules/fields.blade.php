<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Select Department :') !!}
    {!! Form::select('department_id', $departments, null, ['class' => 'form-control select2']) !!}
</div>

<!-- Asset Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asset_id', 'Select Asset :') !!}
    {!! Form::select('asset_id', $assets, null, ['class' => 'form-control select2']) !!}
</div>

<!-- Cycle Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cycle_id', 'Select Cycle :') !!}
    {!! Form::select('cycle_id', $cycles, null, ['class' => 'form-control select2']) !!}
</div>

<!-- Start Date Field -->
@if(isset($maintenanceSchedule))
    <div class="form-group col-sm-6">
        {!! Form::label('start_date', 'Schedule Start Date:') !!}
        {!! Form::date('start_date', $maintenanceSchedule->start_date, ['class' => 'form-control','id'=>'start_date']) !!}
    </div>
    @else
    <div class="form-group col-sm-6">
        {!! Form::label('start_date', 'Schedule Start Date:') !!}
        {!! Form::date('start_date', null, ['class' => 'form-control','id'=>'start_date']) !!}
    </div>
    @endif


@section('scripts')
    <script type="text/javascript">
        $('#start_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

{{--<!-- checklist Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}--}}
{{--    <br>--}}
{{--    <button type="button" class="btn btn-warning" id="checklist_button_id">Add Checklist</button>--}}
{{--    <a href="{{ route('maintenanceSchedules.index') }}" class="btn btn-default">Cancel</a>--}}
{{--</div>--}}

{{--<!---Checklist Actions-->--}}
{{--<div class="checkListActions col-md-12">--}}
{{--    <div class="col-md-6">--}}
{{--        <div class="card">--}}
{{--            <section class="content-header">--}}
{{--                <h3 class="pull-left">Actions</h3>--}}
{{--                <a href="" class='btn btn-primary pull-right'>Preview</a>--}}

{{--            </section>--}}
{{--            <br/><br>--}}
{{--            <div class="box box-primary">--}}
{{--                <div class="box-body ">--}}
{{--                    @if(count($checklists) < 1)--}}
{{--                        <div class="alert alert-danger"> No Actions</div>--}}
{{--                    @endif--}}
{{--                    @php($count =1)--}}
{{--                    @foreach($checklists as $checklist)--}}
{{--                        <table class="table-bordered">--}}
{{--                            <tr>--}}
{{--                                <div class="row form-group div1">--}}
{{--                                    <div class="col-md-8">--}}
{{--                                        {{ $count ++}} . {{$checklist->action}}--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-4">--}}
{{--                                        @include('questions.datatables_actions')--}}
{{--                                        --}}{{----}}{{--                                            <a href="{{url('question/'.$question->id.'/edit')}}">Edit</a>--}}

{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </tr>--}}
{{--                        </table>--}}



{{--                        --}}{{--                                     {{ $count ++}} . {{$question->question}}--}}

{{--                        <ul>--}}
{{--                            @if($question->type == App\Models\Question::USER_INPUT)--}}
{{--                                <label class="badge badge-success">Text input</label>--}}
{{--                            @endif--}}
{{--                            --}}{{--                                            <a href="{{url('question/'.$question->id.'/edit')}}">Edit</a>--}}
{{--                            @if($question->type == App\Models\Question::SELECT_ONE)--}}
{{--                                <label class="badge badge-success"> True/False Choice</label>--}}
{{--                                @foreach($question->answer as $ans)--}}
{{--                                    <li> {{ $ans->choice }}</li>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                            @if($question->type == App\Models\Question::SELECT_MULTIPLE)--}}
{{--                                <label class="badge badge-success"> Multiple Choice</label>--}}
{{--                                @foreach($question->answer as $ans)--}}
{{--                                    <li> {{ $ans->choice }}</li>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                            @if($question->type == App\Models\Question::DATE)--}}
{{--                                <label class="badge badge-success">Date input</label>--}}
{{--                            @endif--}}
{{--                            @if($question->type == App\Models\Question::NUMBER)--}}
{{--                                <label class="badge badge-success">Number input</label>--}}
{{--                            @endif--}}
{{--                            @if($question->type == App\Models\Question::DROP_DOWN_LIST)--}}
{{--                                <label class="badge badge-success">Drop down list</label>--}}
{{--                                @foreach($question->answer as $ans)--}}
{{--                                    <li>{{$ans->choice}}</li>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                            @if($question->type == App\Models\Question::RATING)--}}
{{--                                <label class="badge badge-success">Rating input</label>--}}
{{--                            @endif--}}

{{--                        </ul>--}}

{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <div class="col-md-6">--}}
{{--yyyyyyy--}}
{{--    </div>--}}

{{--</div>--}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('maintenanceSchedules.index') }}" class="btn btn-default">Cancel</a>
</div>
