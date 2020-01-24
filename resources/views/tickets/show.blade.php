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
                    {!! Form::model($ticket, ['route' => ['tickets.resolve', $ticket->id], 'method' => 'patch']) !!}

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
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("input[type = 'checkbox']").prop("disabled", true);
            $('#description').prop("disabled", true);
            $("#issue_type_id").prop("disabled", true);
            $('.resolveTicket,.issueParts, #resolve_submit_id, #issue_parts_id').css({'display':'none'});
            $('#resolve_id').on('click', function () {
                $('.resolveTicket, #resolve_submit_id, #issue_parts_id').show();
                $('#resolve_id').hide();
            });
            $('#issue_parts_id').on('click', function () {
                $('.issueParts').show();
                $('#issue_parts_id').hide();
            });


            $('#surrender_id').on('click', function () {
                var id = $('#ticket_id').val();
                var surrender_status = 1;
                // alert(id);
                $.ajax({
                    type: "POST",
                    url: "/ticket-surrender/" + id,
                    dataType: 'json',
                    data: {'id': id,'surrender_status':surrender_status},
                    success: function(response) {
                        console.log(response.surrender_status)

                        console.log('submitted')
                        window.location = "/tickets";
                    }
                });

                });

            });

    </script>
    @endsection
