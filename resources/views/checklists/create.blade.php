
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'checklists.store', 'method' => 'POST']) !!}

                        @include('checklists.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@section('scripts')

    @endsection
