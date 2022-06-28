@php
  $booking = get_field('global_booking', 'option');
@endphp
<div id='destinations-menu' class='menu'>
  @if(!is_singular(['destinations']))
    <div class='lg:absolute lg:top-[7%] lg:-left-[36.5%] xl:-left-[42.8%]'>
      @if($booking)
        <a class='border-b-1 border-t-0 border-x-0 border-solid border-htr-charcoal btn-primary' href='{{ $booking }}'>Book Now</a>
      @endif
      <button class='btn-hamburger js-nav' aria-label='Toggle Navigation'>
        <span class='btn-hamburger-line'></span>
      </button>
    </div>
  @endif
  <button class='lg:absolute lg:-left-[26px] xl:-left-[17px] font-poppins font-semibold tracking-widest rotate-90 uppercase bg-transparent border-0 cursor-pointer js-destinations'>Destinations</button>
  <ul class='w-full my-0 lg:pl-20 lg:pr-12 xl:pl-36 xl:pr-24 list-none lg:space-y-8'>
    @foreach($getDestinations as $destination)
      @php
        $link = get_permalink($destination->ID);
        $city = $destination->post_title;
        $states = get_the_terms($destination, 'state');
        $state = $states[0]->name;
      @endphp
      <x-destination-menu-item link='{{ $link }}' city='{{ $city }}' state='{{ $state }}' />
    @endforeach
  </ul>
</div>
