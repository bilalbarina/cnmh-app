@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    @lang('crud.create') @lang('models/couvertureMedicals.singular')
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'couvertureMedicals.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('couverture_medicals.fields')
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary"> @lang('crud.save') </button>
                <a href="{{ route('couvertureMedicals.index') }}" class="btn btn-default"> @lang('crud.cancel') </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
