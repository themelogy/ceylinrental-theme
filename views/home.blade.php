@extends('layouts.master')

@section('content')
    @include('partials.home.sliders.2')

	@if(isset($page->settings->show_box))
	@if($page->settings->show_box)
	<section class="page-section" style="padding:30px 0 0 0; text-align:justify;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				@if(isset($page->settings->sub_title->{locale()}))
				<h1 class="text-center">{{ $page->settings->sub_title->{locale()} }}</h1>
				@endif
				{!! $page->body !!}
				</div>
			</div>
		</div>
	</section>
	@endif
	@endif

    @include('partials.cars.slider')

    @if('salatalık'==1)
        @include('partials.home.blog')

        @include('partials.home.slogans')

        @include('partials.home.about-us')

        @include('partials.home.testimonials')

        @include('partials.cars.tabs')

        @include('partials.home.counter')

        @include('partials.home.faq')

        @include('partials.cars.search')

        @include('partials.home.newsletters')

        @include('partials.home.customer-service')

        @include('partials.home.contact-us')

    @endif
@endsection