@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Resolved Tickets
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'resolvedTickets.store']) !!}

                        @include('resolved_tickets.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
