@extends('layouts.app')

@section('content')
  @include('sections.destination.intro')
  @include('sections.destination.amenities')
  @include('sections.destination.site-types')
  @include('sections.destination.park-map')
  @include('sections.destination.faq')
  @include('sections.destination.gallery')
  @include('sections.destination.carousel')
  @include('sections.destination.back')
  @include('sections.destination.call-to-action')
@endsection
