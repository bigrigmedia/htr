<section class='px-5 lg:pr-20 xl:pl-12 xl:pr-32 xl:pb-40'>
  <x-rule type='2' heading='Destinations' subheading='' />
  <div class='lg:flex lg:items-center lg:justify-between pb-8 lg:pb-16'>
    <h3>Pickup Your Destination.<br> We'll Help with the Journey.</h3>
    <div class='hidden lg:inline-block'>
      <a class='btn-icon' href='{{ get_permalink(161) }}'>
        <svg class='btn-svg' fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 97 97'>
          <path class='btn-svg-outer' d='M.707 48.027 48.027.707l47.32 47.32-47.32 47.32z' />
          <path class='btn-svg-inner' d='M66.06 49.06a1.5 1.5 0 0 0 0-2.12l-9.545-9.547a1.5 1.5 0 1 0-2.122 2.122L62.88 48l-8.486 8.485a1.5 1.5 0 1 0 2.122 2.122l9.546-9.546ZM29 49.5h36v-3H29v3Z' />
        </svg>
        All Destinations
      </a>
    </div>
  </div>
  <div class='space-y-11'>
    @foreach($getDestinations as $destination)
      @php
        $link = get_permalink($destination->ID);
        $city = $destination->post_title;
        $states = get_the_terms($destination, 'state');
        $state = $states[0]->name;
        $description = $destination->post_excerpt;
        $booking = get_field('booking_url', $destination->ID);
        $image = wp_get_attachment_image_src( get_post_thumbnail_id($destination->ID), 'w1013x615' )[0] ?? null ;
      @endphp
      <x-destination-portal
        link='{{ $link }}'
        city='{{ $city }}'
        state='{{ $state }}'
        description='{{ $description }}'
        booking='{{ $booking }}'
        image='{{ $image }}'
      />
    @endforeach
  </div>
</section>
