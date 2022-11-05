@extends('frontend.layouts.master')

@section('frontendtitle') Home Page @endsection

@section('frontend_content')
    @include('frontend.pages.widgets.slider')

    @include('frontend.pages.widgets.featured')

    @include('frontend.pages.widgets.countdown')

    @include('frontend.pages.widgets.best-seller')

    @include('frontend.pages.widgets.latest-product')

    @include('frontend.pages.widgets.testimonial')
@endsection
