@extends('layouts.app')

@section('content')
  @php
    global $post;
  @endphp

  @switch($post->post_name)
    @case('about')
      @include('sections.about.content')
    @break
    @case('contact')
      @include('sections.contact.content')
    @break
  @endswitch
  @include('sections.components')
@endsection
