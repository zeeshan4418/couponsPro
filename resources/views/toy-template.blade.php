@extends('layout.front-app')
@include('include.header')
@section('content')
@include('toy-template.home-banner')
@include('toy-template.about-us')
@include('toy-template.new-arrival')
@include('toy-template.customer-review')
@include('toy-template.product-view')
@include('toy-template.subscribe')

@include('include.footer')
@endsection