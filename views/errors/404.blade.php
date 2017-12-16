@extends('layouts.master')

@section('breadcrumbs')
    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs text-center">
        <div class="container">
            <div class="page-header">
                <h1>404</h1>
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
            <h3>404</h3>
            <h2><i class="fa fa-warning"></i> Hata! Aradığınız sayfayı bulamadık!</h2>
            <p><a class="btn btn-theme btn-theme-dark" href="{{ url(locale()) }}">Ana Sayfaya Geri Dön</a></p>
        </div>
    </section>
    <!-- /PAGE -->
@stop
