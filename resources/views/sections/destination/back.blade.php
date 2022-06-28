@php
  $text = $post->post_parent === 0 ? 'Destinations' : get_the_title($post->post_parent);
  $link = $post->post_parent === 0 ? get_permalink(161) : get_permalink($post->post_parent);
@endphp
<section class='px-5 xl:px-36 pb-12 xl:pb-32'>
  <div class='inline-flex'>
    <a class='btn-icon' href='{{ $link }}'>
      <svg class='btn-svg' viewBox='0 0 97 97' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <rect class='btn-svg-outer' x='95.3461' y='48.0269' width='66.9203' height='66.9203' transform='rotate(135 95.3461 48.0269)' />
        <path class='btn-svg-inner' d='M29.9926 46.993C29.4068 47.5788 29.4068 48.5286 29.9926 49.1144L39.5385 58.6603C40.1243 59.2461 41.074 59.2461 41.6598 58.6603C42.2456 58.0745 42.2456 57.1248 41.6598 56.539L33.1745 48.0537L41.6598 39.5684C42.2456 38.9826 42.2456 38.0329 41.6598 37.4471C41.074 36.8613 40.1243 36.8613 39.5385 37.4471L29.9926 46.993ZM67.0532 46.5537L31.0532 46.5537L31.0532 49.5537L67.0532 49.5537L67.0532 46.5537Z' />
      </svg>
      Go Back to {{ $text }}
    </a>
  </div>
</section>
