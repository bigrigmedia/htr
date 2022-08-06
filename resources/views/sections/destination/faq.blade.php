@php
  $faqs = new WP_Query([
    'post_type'       => 'faqs',
    'posts_per_page'  => -1,
    'tax_query'       => [
      [
        'taxonomy' => 'destination',
        'field'    => 'slug',
        'terms'    => $post->post_name,
      ],
    ],
    'no_found_rows'   => true,
  ]);
@endphp

@if($faqs->have_posts())
  <section id='faqs' class='px-5 lg:pr-20 xl:pl-12 lx:pr-32 pb-12 xl:pb-40 scroll-m-8'>
    <x-rule type='2' heading='FAQ' subheading='' />
    <h3>Have Questions About Your<br> Stay? We Got You.</h3>
    <div class='mt-8'>
      @foreach($faqs->posts as $faq)
        <div class='pt-6 border-t-1 border-b-0 border-x-0 border-solid border-htr-charcoal'>
          <div class='pb-6'>
            <button class='btn-faq js-faq group'>
              <span class='destination-faq-title hover:pl-6 transition-all duration-700'>{{ $faq->post_title }}</span>
              <svg class='btn-svg' viewBox='0 0 49 49' fill='none' xmlns='http://www.w3.org/2000/svg'>
                <rect class='btn-svg-outer' x='24.0269' y='47.3466' width='32.9792' height='32.9792' transform='rotate(-135 24.0269 47.3466)' />
                <path class='btn-svg-inner' d='M24.7208 14.8287C24.3303 14.4382 23.6971 14.4382 23.3066 14.8287L16.9426 21.1927C16.5521 21.5832 16.5521 22.2164 16.9426 22.6069C17.3331 22.9974 17.9663 22.9974 18.3568 22.6069L24.0137 16.95L29.6705 22.6069C30.0611 22.9974 30.6942 22.9974 31.0847 22.6069C31.4753 22.2164 31.4753 21.5832 31.0847 21.1927L24.7208 14.8287ZM25.0137 33.5459L25.0137 15.5358L23.0137 15.5358L23.0137 33.5459L25.0137 33.5459Z' />
              </svg>
            </button>
          </div>
          <div class='destination-faq-content' data-state='closed'>
            {!! apply_filters('the_content', $faq->post_content) !!}
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endif
