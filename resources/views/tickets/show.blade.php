@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ticket
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($ticket, ['route' => ['tickets.update', $ticket->id], 'method' => 'patch']) !!}

                    @include('tickets.show_fields')

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
            $('#description').prop("disabled", true);
        })
    </script>
    @endsection
