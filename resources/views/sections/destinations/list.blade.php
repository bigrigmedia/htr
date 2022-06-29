<div id="list" class='destinations-layout is-active'>
  <div class='grid md:grid-cols-2 lg:grid-cols-3 gap-8 xl:gap-16 mt-7'>
    @foreach($getDestinations as $destination)
      @php
        $link = get_permalink($destination->ID);
        $city = $destination->post_title;
        $states = get_the_terms($destination, 'state');
        $state = $states[0]->name;
        $description = $destination->post_excerpt;
        $booking = get_field('booking_url', $destination->ID);
        $image_mobile = wp_get_attachment_image_src( get_post_thumbnail_id($destination->ID), 'w470x419' )[0] ?? null;
        $image_desktop = wp_get_attachment_image_src( get_post_thumbnail_id($destination->ID), 'w940x838' )[0] ?? null;
      @endphp
      <div>
        <a class='block overflow-hidden' href='{{ $link }}'>
          <img
            class='animate-scale'
            srcset='{{ $image_mobile }} 470w, {{ $image_desktop }} 940w'
            sizes='(max-width: 375px) 470px, (min-width: 812px) 940px, 470px'
            src='{{ $image_desktop }}'
            alt='{{ $city }}'
            loading='lazy'
          />
        </a>
        <div class='flex items-center justify-between mt-2 text-lg font-poppins uppercase tracking-wider'>
          <span class='font-bold'>{{ $city }}</span>
          <span class='font-normal'>{{ $state }}</span>
        </div>
      </div>
    @endforeach
  </div>
</div>
