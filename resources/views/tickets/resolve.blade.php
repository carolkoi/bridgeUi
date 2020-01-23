@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ticket
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($ticket, ['route' => ['tickets.close', $ticket->id], 'method' => 'patch']) !!}

                    @include('tickets.resolve_fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        jQuery(document).ready(function () {
            $("input[type = 'checkbox']").prop("disabled", true);
            $('#description, #issue_type_id, #assign_to_id, #category_id').prop("disabled", true);
        });
    </script>
    @endsection
