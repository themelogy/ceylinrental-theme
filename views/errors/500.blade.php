@extends('layouts.master')

@section('breadcrumbs')
    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs text-center">
        <div class="container">
            <div class="page-header">
                <h1>500</h1>
            </div>
            {!! Breadcrumbs::renderIfExists('page') !!}
        </div>
    </section>
    <!-- /BREADCRUMBS -->
@endsection

@section('content')
    <!-- PAGE -->
    <section class="page-section text-center error-page light">
        <div class="container">
            <h3>500</h3>
            <h2><i class="fa fa-warning"></i> {{ trans('core::core.error 500 title') }}</h2>
            <p>{!! trans('core::core.error 500 description') !!}</p>
        </div>
    </section>
    <!-- /PAGE -->
@stop