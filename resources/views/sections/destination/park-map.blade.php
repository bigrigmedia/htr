@php
  $map = get_field('site_map_image') ?? null;
  $pdf = get_field('site_map_pdf') ?? null;
@endphp

@if($map && $pdf)
  <section id='map' class='px-5 lg:pl-12 lg:pr-32 pb-12 lg:pb-48 scroll-m-8'>
    <div class='p-1 lg:p-2 border-1 border-solid border-htr-charcoal'>
      <div class='py-4 px-7 lg:py-9 lg:px-14 border-1 border-solid border-htr-charcoal'>
        <h3>Site Map</h3>
        <div class='flex flex-col items-center justify-center'>
          @if($map)
            <img src='{{ $map['url'] }}' alt='{{ $map['alt'] }}' loading='lazy' />
          @endif
          @if($pdf)
            <div class='mt-3 lg:self-end'>
              <a class='btn-link' href='{{ $pdf }}'>Download PDF &rsaquo;</a>
            </div>
          @endif
        </div>
      </div>
    </div>
  </section>
@endif
