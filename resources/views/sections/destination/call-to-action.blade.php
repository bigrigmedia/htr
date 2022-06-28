@php
  $mobile = get_field('action_background')['sizes']['w444x742'] ?? null;
  $desktop = get_field('action_background')['sizes']['w1917x1058'] ?? null;
  $content = get_field('action_content');
  $booking = get_field('booking_url');
@endphp
<section class='cta is-default js-background' data-mobile='{{ $mobile }}' data-desktop='{{ $desktop }}'>
  <svg class='absolute top-edge inset-x-0 z-50' fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1748 55'>
    <path class='fill-htr-bg' d='M0 34.593V.5h1747.5v44.594H1734l-50.5 9.12-29.5-3.04h-49.5l-16-4.145h-19l-18.5 4.145-8-4.145h-9.5l-12-3.04-29.5 10.225-19-10.225-33.5 1.105-9 6.08H1403l-28-4.145h-73.5L1280 42.33l-12-1.934h-99l-47.5 3.593h-15l-31 7.185-29.5-6.08-24 1.934h-29.5L963 40.397l-35.5-2.764-55 9.397-13-1.935-7.5 1.934h-23l-12-3.04-12 3.04-11.5-3.04H751l-38.5-9.395H696l-8 3.04-9 2.763-10-5.803h-15.5l-9 5.803-13.5-2.764h-21.5l-13 2.764H585v3.593l-10-3.593h-22.5l-10 3.593-18.5-3.593h-83.5L424 43.989l-23.5-3.593-27.5-7.462h-22L338 31h-26l-26 1.934L244 31l-34 9.396-19.5-2.764-24-3.04-18 3.04H53l-53-3.04Z' />
  </svg>
  <div class='lg:flex lg:flex-row lg:items-center lg:justify-between relative z-50 w-full px-5 lg:pl-16 lg:pr-32 xl:px-32'>
    {!! $content !!}
    @if($booking)
      <a class='btn-action' href='{{ $booking }}'>Book Now</a>
    @endif
  </div>
</section>
