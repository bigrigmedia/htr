@php
  $city = get_the_title($post->post_parent);
  $states = get_the_terms($post->post_parent, 'state');
  $state = $states[0]->name;
  $header = $post->post_parent === 0 ? 'destination-intro-header' : 'destination-intro-header-child';
@endphp

@if(!is_404())
  @if($post->post_parent !== 0)
    <x-rule type='1' heading='{{ $city }}' subheading='{{ $state }}' />
  @endif
  <span class='{{ $header }}'>{!! $title !!}</span>
@else
  <h3 class='mb-6'>{!! $title !!}</h3>
@endif
