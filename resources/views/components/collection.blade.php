<section class='collection'>
  <x-rule type='2' heading='' subheading='' />
  {!! $content !!}
  <div class='grid md:grid-cols-2 lg:grid-cols-3 gap-8 xl:gap-16 mt-7 lg:mt-14'>
    @foreach($destinations as $destination)
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
        <div class='flex items-center justify-between mt-2 text-lg font-bicyclette uppercase tracking-wider'>
          <span class='text-[24px] font-bold'>{{ $city }}</span>
          <span class='text-[16px] font-normal'>{{ $state }}</span>
        </div>
      </div>
    @endforeach
  </div>
  <div class='lg:flex lg:justify-end mt-8 lg:mt-16'>
    <a class='btn-icon' href='{{ get_permalink(161) }}'>
      <svg class='btn-svg' fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 97 97'>
        <path class='btn-svg-outer' d='M.707 48.027 48.027.707l47.32 47.32-47.32 47.32z' />
        <path class='btn-svg-inner' d='M66.06 49.06a1.5 1.5 0 0 0 0-2.12l-9.545-9.547a1.5 1.5 0 1 0-2.122 2.122L62.88 48l-8.486 8.485a1.5 1.5 0 1 0 2.122 2.122l9.546-9.546ZM29 49.5h36v-3H29v3Z' />
      </svg>
      Explore All Our Destinations
    </a>
  </div>
</section>
