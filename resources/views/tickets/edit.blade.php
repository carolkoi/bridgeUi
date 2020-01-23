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
                   {!! Form::model($ticket, ['route' => ['tickets.update', $ticket->id], 'method' => 'patch']) !!}

                        @include('tickets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
@section('scripts')
    <script>
        jQuery(document).ready(function () {
            CKEDITOR.replace('description')
            $("input[type = 'checkbox']").prop("disabled", true);
            $("#issue_type_id").prop("disabled", true);
            $('#description').prop("disabled", true);
            // $("#assign_to_id").change(function(){
            //     var value = $("#assign_to_id option:selected").val();
            //     var theDiv = $(".is" + value);
            //     $("#assign_to_id option:selected").hide().siblings().removeProp('disabled');
            // });
        })
    </script>
@endsection
