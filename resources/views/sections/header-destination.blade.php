@php
  $booking = get_field('booking_url', $post->post_parent);
  $header = $post->post_parent === 0 ? 'destination-header' : 'destination-header-child';
  $logo = $post->post_parent === 0 ? 'destination-logo' : 'destination-logo-child';
  $menu = $post->post_parent === 0 ? 'destination-menu' : 'destination-menu-child';
@endphp
<header class='{{ $header }}'>
  <a class='{{ $logo }}' href='{{ home_url('/') }}' title='{!! $siteName !!}'>
    <svg fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 104 157'>
      <g clip-path='url(#a)' fill='#413D3D'>
        <path d='M50.589.993v154.996c0 .263-.103.516-.286.702a.97.97 0 0 1-.691.291H.977a.972.972 0 0 1-.892-.602 1.008 1.008 0 0 1 .186-1.071l44.582-47.989a1.005 1.005 0 0 0-.183-1.515.973.973 0 0 0-.54-.158H.977a.95.95 0 0 1-.537-.154.974.974 0 0 1-.425-.996.975.975 0 0 1 .256-.504l44.582-47.988a.999.999 0 0 0 .183-1.08.99.99 0 0 0-.365-.436.965.965 0 0 0-.541-.158H.977a.966.966 0 0 1-.534-.165 1.007 1.007 0 0 1-.171-1.508L48.905.313a.973.973 0 0 1 1.067-.236c.18.073.336.2.446.362.11.164.169.356.17.554ZM72.12 41.222V19.508l-.688-4.652a.542.542 0 0 1 .12-.419.525.525 0 0 1 .387-.188h8.015a.498.498 0 0 1 .387.176.517.517 0 0 1 .12.413l-.634 4.67v8.972a.52.52 0 0 0 .149.364c.095.097.224.151.358.151h14.674a.503.503 0 0 0 .358-.15.52.52 0 0 0 .148-.365v-8.972l-.67-4.652a.522.522 0 0 1 .278-.555.5.5 0 0 1 .211-.052h8.016a.499.499 0 0 1 .386.176.524.524 0 0 1 .12.413l-.633 4.67v21.769l.633 4.67a.525.525 0 0 1-.12.413.511.511 0 0 1-.386.175h-7.925a.481.481 0 0 1-.382-.176.5.5 0 0 1-.107-.412l.67-4.652V35.54a.52.52 0 0 0-.149-.364.503.503 0 0 0-.358-.15H80.424a.503.503 0 0 0-.358.15.52.52 0 0 0-.148.364v5.737l.633 4.67a.522.522 0 0 1-.294.544.498.498 0 0 1-.213.044h-8.141a.498.498 0 0 1-.387-.175.517.517 0 0 1-.12-.413l.688-4.652M88.277 131.664l-7.093.846a.502.502 0 0 1-.393-.13.516.516 0 0 1-.167-.385v-8.55a.507.507 0 0 1 .142-.37.493.493 0 0 1 .364-.145h7.762c3.836 0 5.428 1.14 5.428 3.825 0 2.997-2.171 4.431-6.025 4.909h-.018Zm6.46 4.982a.512.512 0 0 1-.072-.46.507.507 0 0 1 .324-.33 9.651 9.651 0 0 0 4.868-3.572 9.905 9.905 0 0 0 1.845-5.805c0-4.872-3.618-9.561-11.778-9.561H72.752a.501.501 0 0 0-.386.176.512.512 0 0 0-.12.412l.687 4.652v21.733l-.688 4.706a.525.525 0 0 0 .12.413.501.501 0 0 0 .387.176h8.106a.502.502 0 0 0 .386-.176.52.52 0 0 0 .12-.413l-.723-4.706v-4.836a.518.518 0 0 1 .434-.515l5.428-.809a.49.49 0 0 1 .489.221l5.066 7.207a.617.617 0 0 1 0 .221l.56 3.383a.551.551 0 0 0 .507.423h9.3a.501.501 0 0 0 .449-.276.524.524 0 0 0-.033-.533l-8.106-11.731ZM91.461 71.633h8.016l3.962.423a.5.5 0 0 0 .411-.161.51.51 0 0 0 .132-.428l-.742-5.516a.51.51 0 0 0-.579-.33H72.5a.502.502 0 0 0-.34.13.518.518 0 0 0-.167.33l-.688 5.515a.522.522 0 0 0 .137.435.505.505 0 0 0 .424.153l3.89-.423h7.98v20.906l-.634 4.67a.524.524 0 0 0 .12.412.506.506 0 0 0 .387.176h8.015a.5.5 0 0 0 .387-.176.517.517 0 0 0 .12-.412l-.67-4.67V71.632Z'/>
      </g>
      <defs>
        <clipPath id='a'>
          <path fill='#413D3D' d='M0 0h104v157H0z'/>
        </clipPath>
      </defs>
    </svg>
  </a>
  <div class='{{ $menu }}'>
    @if($post->post_parent === 0)
      <span class='destination-current'>HTR - {{ $post->post_title }}</span>
      @if($getDestinationSections)
        <ul class='hidden lg:flex lg:items-stretch lg:justify-between my-0 pl-0 lg:pr-7 xl:pr-14 list-none lg:space-x-11 xl:space-x-32'>
          @foreach($getDestinationSections as $key => $destinationSection)
            <li class='lg:flex lg:items-center text-sm xl:text-base font-bicyclette font-bold uppercase'>
              <a class='text-htr-moss tracking-wider no-underline' href='#{{ $key }}'>{{ $destinationSection }}</a>
            </li>
          @endforeach
        </ul>
      @endif
    @endif
    <div class='lg:flex lg:items-stretch lg:pr-16 xl:pr-5'>
      @if($booking)
        <a class='destination-book' href='{{ $booking }}'>Book Now</a>
      @endif
      <button class='btn-hamburger lg:ml-3 js-nav' aria-label='Toggle Navigation'>
        <span class='btn-hamburger-line'></span>
      </button>
    </div>
  </div>
  @if($post->post_parent !== 0)
    <div class='hidden lg:block w-full lg:pt-16 pr-5 lg:pr-6'>
      <x-rule type='2' heading='' subheading='' />
    </div>
  @endif
  <svg class='absolute bottom-edge inset-x-0 z-50 lg:hidden' fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 679 37'>
    <path class='fill-htr-bg' d='M0 29.805v-25.9L679 0v27.574h-7.614l-8.59-1.116-21.475 6.974h-21.865l-70.672-5.858H526.332l-11.323 5.858h-42.95l-11.909-1.953-10.347-9.484-23.427 7.81-13.275-2.231-5.076-1.116-11.128 3.347h-9.371L373.47 31.48l-9.371-1.674H308.849l-12.885-7.81h-21.67l-26.16 9.484-11.714 1.953-11.909 3.068-12.494-5.021h-7.809l-19.328 1.953-14.642-1.953h-9.371l-9.566 1.953-5.271-1.953h-5.662l-7.028 1.953h-13.471l-7.028-1.953h-3.123l-6.833 1.953h-3.514l-12.3-1.953-15.813-1.674h-6.833l-8.98 1.674-5.662 1.953-14.447-1.953-4.49-1.674h-6.833L9.566 31.48 0 29.805Z' />
  </svg>
</header>
