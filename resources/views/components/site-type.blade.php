@php
  $booking = get_field('booking_url');
@endphp
<div class='flex flex-col lg:grid lg:grid-cols-portal lg:gap-8 xl:gap-16'>
  <div class='order-2 lg:order-1'>
    <h3 class='mb-4 lg:mb-9 lg:py-5 lg:border-t-5 lg:border-b-1 lg:border-x-0 lg:border-solid lg:border-htr-charcoal'>{{ $heading }}</h3>
    <div class='destination-site-type-content'>
      {!! apply_filters('the_content', $content) !!}
    </div>
    <div class='hidden lg:block mt-16'>
      @if($booking)
        <a class='btn-link' href='{{ $booking }}'>Book Now &rsaquo;</a>
      @endif
    </div>
    <div class='btn-group mt-6 lg:hidden'>
      <a class='btn-link' href='{{ $link }}'>Learn More &rsaquo;</a>
      @if($booking)
        <a class='btn-icon' href='{{ $booking }}'>
          <svg class='btn-svg' fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 97 97'>
            <path class='btn-svg-outer' d='M.707 48.027 48.027.707l47.32 47.32-47.32 47.32z' />
            <path class='btn-svg-inner' d='M66.06 49.06a1.5 1.5 0 0 0 0-2.12l-9.545-9.547a1.5 1.5 0 1 0-2.122 2.122L62.88 48l-8.486 8.485a1.5 1.5 0 1 0 2.122 2.122l9.546-9.546ZM29 49.5h36v-3H29v3Z' />
          </svg>
          Book Now
        </a>
      @endif
    </div>
  </div>
  <div class='order-1 lg:order-2 pb-6 lg:pb-0'>
    <a class='block overflow-hidden' href='{{ $link }}'>
      <img class='animate-scale' src='{{ $image }}' alt='{{ $heading }}' loading='lazy' />
    </a>
  </div>
</div>
