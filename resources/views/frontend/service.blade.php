@extends('frontend.layout.main')
@section('main-container')
<!-- Facts Start -->
@include('frontend.facts_page')
<!-- Facts End -->
@include('frontend.service_page')
<!-- Service End -->
<!-- Testimonial Start -->
@include('frontend.testimonial_page')
<!-- Testimonial End -->
@endsection
