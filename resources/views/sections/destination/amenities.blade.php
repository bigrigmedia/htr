@php
  $image = get_field('amenities_image')['sizes']['w889x676'] ?? null;
  $alt = get_field('amenities_image')['alt'] ?? null;
  $amenities = get_the_terms($post, 'amenities') ?? null;
  $experiences = get_the_terms($post, 'experiences') ?? null;
@endphp
@if($amenities && $experiences)
  <section id='amenities' class='px-5 lg:pl-0 lg:pr-20 xl:pr-32 pb-12 xl:pb-32 scroll-m-32'>
    <div class='lg:grid lg:grid-cols-2 lg:gap-14 xl:gap-28'>
      <div class='mb-12 lg:mb-0 -ml-5 lg:-ml-0 -mr-5 lg:-mr-0'>
        <img src='{{ $image }}' alt='{{ $alt }}' loading='lazy' />
      </div>
      <div class='destination-taxonomies-grid'>
        <div class='destination-taxonomy-col'>
          <span class='destination-taxonomy-title'>Site Amenities</span>
          <ul class='destination-taxonomy-list'>
            @foreach($amenities as $amenity)
              <x-list-item content='{{ $amenity->name }}' />
            @endforeach
          </ul>
        </div>
        <div class='destination-taxonomy-col'>
          <span class='destination-taxonomy-title'>Experiences</span>
          <ul class='destination-taxonomy-list'>
            @foreach($experiences as $experience)
              <x-list-item content='{{ $experience->name }}' />
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>
@endif
