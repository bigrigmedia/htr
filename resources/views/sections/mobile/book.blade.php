@php
  if (is_singular(['destinations'])) {
    $link = $post->post_parent === 0 ? get_field('booking_url') : get_field('booking_url', $post->post_parent);
  } else {
    $link = get_field('global_booking', 'option');
  }
@endphp

@if($link)
  <div class='fixed bottom-0 inset-x-0 z-50 h-[63px] lg:hidden'>
    <a class='flex items-center justify-center w-full h-full font-bicyclette font-bold text-btn-primary text-htr-charcoal no-underline uppercase tracking-wider bg-htr-dawn hover:text-htr-canvas hover:bg-htr-charcoal' href='{{ $link }}'>Book Now</a>
  </div>
@endif
