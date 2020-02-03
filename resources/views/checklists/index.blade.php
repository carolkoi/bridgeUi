@extends('layouts.app')

@section('content')
    {{--    <div class="container">--}}
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <section class="content-header">
                    <h1 class="pull-left">Add Action</h1>
                    <a  href="{{ url('/maintenanceSchedules')}}" class="btn btn-default pull-right"> Back</a>
                </section>
                <br/>
                @include('checklists.create')

            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <section class="content-header">
                    <h1 class="pull-left">{{$schedule->name}} Checklist</h1>
{{--                    <a href="{{route('checklist.preview',$schedule->id)}}" class='btn btn-primary pull-right'>Preview</a>--}}

                </section>
                <br/><br>
                <div class="box box-primary">
                    <div class="box-body ">
{{--                        <checklist-component></checklist-component>--}}
                        @if(count($checklists) < 1)
                            <div class="alert alert-danger"> No Actions yet</div>
                        @endif
                        @php($count =1)

                            <table class="table table-responsive table-striped table-bordered">
                                <thead>
                                <th>Check</th>
                                <th>Tasks</th>
{{--                                <th>Comment</th>--}}
                                <th>Actions</th>
                                </thead>
                            <tbody>
                                @foreach($checklists as $checklist)
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>{{$checklist->action}}</td>
{{--                                    <td><textarea></textarea></td>--}}
                                    <td>@include('checklists.datatables_actions')</td>
{{----}}
                                </tr>

                                @endforeach
                            </tbody>

                            </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection


