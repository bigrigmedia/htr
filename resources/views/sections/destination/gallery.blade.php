@php
  $indoor = get_field('indoor_gallery') ?? null;
  $outdoor = get_field('outdoor_gallery') ?? null;
  $amenities = get_field('amenities_gallery') ?? null;
  $galleries = [
    'indoor' => $indoor,
    'outdoor' => $outdoor,
    'amenities' => $amenities,
  ];
@endphp

@if($indoor || $outdoor || $amenities)
  <section id='gallery' class='hidden lg:block px-5 lg:pr-20 xl:pl-12 xl:pr-32 pb-12 xl:pb-28 scroll-m-8'>
    <x-rule type='2' heading='Gallery' subheading='' />
    <div class='lg:flex lg:items-center lg:justify-between'>
      <h3>See For Yourself</h3>
      <div class='btn-pickers'>
        <button class='btn-picker js-picker is-active' data-group='all'>All</button>
        @foreach($galleries as $key => $gallery)
          <button class='btn-picker js-picker' data-group='{{ $key }}'>{{ ucfirst($key) }}</button>
        @endforeach
      </div>
    </div>
    @if($galleries)
      <div class='destination-galleries js-shuffle js-modals'>
        @foreach($galleries as $key => $gallery)
          @foreach($gallery as $image)
            <figure class='destination-image js-image' data-groups='["{{ $key }}"]'>
              <a class='block overflow-hidden' href='{{ $image['url'] }}' data-fancybox='gallery'>
                <img class='w-full animate-scale' src='{{ $image['sizes']['w470x419'] }}' alt='{{ $image['alt'] }}' />
              </a>
            </figure>
          @endforeach
        @endforeach
      </div>
    @endif
  </section>
@endif
