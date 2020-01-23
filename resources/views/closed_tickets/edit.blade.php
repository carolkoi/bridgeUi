@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Closed Ticket
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($closedTicket, ['route' => ['closedTickets.update', $closedTicket->id], 'method' => 'patch']) !!}

                        @include('closed_tickets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection