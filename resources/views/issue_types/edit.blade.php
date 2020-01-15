@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Issue Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($issueType, ['route' => ['issueTypes.update', $issueType->id], 'method' => 'patch']) !!}

                        @include('issue_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection