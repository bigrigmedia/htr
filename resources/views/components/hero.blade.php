@php
  $type = get_field('hero_type') ?? null;
  $mobile = get_field('hero_image')['sizes']['w780x736'] ?? null;
  $desktop = get_field('hero_image')['sizes']['w1740x1140'] ?? null;
  $video = get_field('hero_video') ?? null;
  $content = get_field('hero_content') ?? null;
@endphp
@if($mobile && $desktop)
  <section class='hero js-hero' data-mobile='{{ $mobile }}' data-desktop='{{ $desktop }}'>
    @if($content)
      <div class='hero-content'>
        {!! $content !!}
      </div>
    @endif
    @if($video)
    @endif
    <svg class='absolute bottom-edge inset-x-0 z-50' fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1739 56'>
      <path class='fill-htr-bg' d='M0 14v41.5l1739-7V10h-19.5l-22-2-55 12.5h-56l-181-10.5H1348l-29 10.5h-110l-30.5-3.5L1152 0l-60 14-34-4-13-2-28.5 6h-24l-36 3-24-3H791L758 0h-55.5l-67 17-30 3.5L575 26l-32-9h-20l-49.5 3.5L436 17h-24l-24.5 3.5L374 17h-14.5l-18 3.5H307L289 17h-8l-17.5 3.5h-9L223 17l-40.5-3H165l-23 3-14.5 3.5-37-3.5L79 14H61.5l-37 3L0 14Z' />
    </svg>
  </section>
@endif
