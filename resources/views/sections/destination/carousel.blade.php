@php
  $carousel = get_field('carousel');
@endphp

@if($post->post_parent !== 0 && $carousel)
  <section class='px-5 lg:pr-20 xl:pl-12 xl:pr-32 pb-12 xl:pb-32 scroll-m-8'>
    <x-rule type='2' heading='' subheading='' />
    <h3>Gallery</h3>
    <div class='destination-carousel'>
      <div class='siema'>
        @foreach($carousel as $image)
          <img src='{{ $image['sizes']['w1536x954'] }}' alt='{{ $image['alt'] }}' loading='lazy' />
        @endforeach
      </div>
      <div class='destination-carousel-buttons'>
        <button class='btn-icon js-prev'>
          <svg class='btn-svg' viewBox='0 0 89 89' fill='none' xmlns='http://www.w3.org/2000/svg'>
            <rect class='btn-svg-outer' x='88.2929' y='44.5' width='61.9325' height='61.9325' transform='rotate(135 88.2929 44.5)' />
            <path class='btn-svg-inner' d='M28.066 43.8178C27.6755 44.2083 27.6755 44.8415 28.066 45.232L34.4299 51.596C34.8205 51.9865 35.4536 51.9865 35.8442 51.596C36.2347 51.2054 36.2347 50.5723 35.8442 50.1818L30.1873 44.5249L35.8442 38.868C36.2347 38.4775 36.2347 37.8444 35.8442 37.4538C35.4536 37.0633 34.8205 37.0633 34.4299 37.4538L28.066 43.8178ZM62.1294 43.5249L28.7731 43.5249L28.7731 45.5249L62.1294 45.5249L62.1294 43.5249Z' />
          </svg>
        </button>
        <button class='btn-icon js-next'>
          <svg class='btn-svg' viewBox='0 0 89 89' fill='none' xmlns='http://www.w3.org/2000/svg'>
            <rect class='btn-svg-outer' x='0.707107' y='44.5' width='61.9325' height='61.9325' transform='rotate(-45 0.707107 44.5)' />
            <path class='btn-svg-inner' d='M60.934 45.1822C61.3245 44.7917 61.3245 44.1585 60.934 43.768L54.5701 37.404C54.1795 37.0135 53.5464 37.0135 53.1558 37.404C52.7653 37.7946 52.7653 38.4277 53.1558 38.8182L58.8127 44.4751L53.1558 50.132C52.7653 50.5225 52.7653 51.1556 53.1558 51.5462C53.5464 51.9367 54.1795 51.9367 54.5701 51.5462L60.934 45.1822ZM26.8706 45.4751H60.2269V43.4751H26.8706V45.4751Z' />
          </svg>
        </button>
      </div>
    </div>
  </section>
@endif
