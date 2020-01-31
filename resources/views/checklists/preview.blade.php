@extends('layouts.app')

@section('content')
    <div class="container" style="margin-left: 150px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">

                    <section class="content-header">
                        <h1>
                            {{  $schedule->name}} Checklist
                            <a  href="{{ url('/checklist',$schedule->id)}}" class="btn btn-default pull-right"> Back</a>
                        </h1>
                    </section>
                    <br>
                    <div class="box box-primary">
                        <div class="box-body" style="margin-left: 50px; margin-right: 50px">
                                @php($count =1)
                                <div class="content">
                                    @include('adminlte-templates::common.errors')
                                    {{--                                <div class="box box-primary">--}}

                                    {{--                                    <div class="box-body" style="margin-left: 50px; margin-right: 50px">--}}
                                    <div class="row">
                                        {!! Form::open(['style' => 'width:100%', 'id' => 'checklistForm']) !!}

                                        @include('checklists.show_preview')

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

