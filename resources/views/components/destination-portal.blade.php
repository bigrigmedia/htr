<div class='flex flex-col lg:grid lg:grid-cols-portal lg:gap-8 xl:gap-16'>
  <div class='order-2 lg:order-1'>
    <x-rule type='1' heading='{{ $state }}' subheading='HTR' />
    <h4>{{ $city }}</h4>
    @if($description)
      <div class='portal'>
        {!! apply_filters('the_content', $description) !!}
      </div>
    @endif
    <div class='btn-group mt-7 pb-8 lg:mt-14 border-b-1 border-t-0 border-x-0 border-solid border-htr-charcoal'>
      @if($link)
        <a class='btn-link' href='{{ $link }}'>Learn More &rsaquo;</a>
      @endif
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
      <img class='w-full animate-scale' src='{{ $image }}' alt='{{ $city }}' loading='lazy' />
    </a>
  </div>
</div>
