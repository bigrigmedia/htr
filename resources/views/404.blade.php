@extends('layouts.app')

@section('content')
  <section class='px-5 lg:pr-20 xl:pl-12 xl:pr-32 xl:pb-40'>
    <div class='pt-32 lg:pt-16'>
      <x-rule type='1' heading='' subheading='' />
    </div>
    <div class='w-full lg:max-w-3xl mt-8 lg:mt-16'>
      @include('partials.page-header')

      @if (! have_posts())
        <p>
          {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
        <p>
      @endif
    </div>
  </section>
@endsection
