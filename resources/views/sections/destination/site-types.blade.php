@php
  $types = get_field('site_types') ?? null;
@endphp

@if($types)
  <section id='site-types' class='px-5 lg:pr-20 xl:pl-12 xl:pr-32 pb-12 xl:pb-44 scroll-m-8'>
    <x-rule type='2' heading='Accomadations' subheading='' />
    <h3>Site Types</h3>
    <div class='mt-10 space-y-11'>
      @foreach($types as $type)
        @php
          $heading = $type->post_title;
          $content = $type->post_content;
          $link = get_permalink($type->ID);
          $image = wp_get_attachment_image_src( get_post_thumbnail_id($type->ID), 'w1013x615' ) ? wp_get_attachment_image_src( get_post_thumbnail_id($type->ID), 'w1013x615' )[0] : null;
        @endphp
        <x-site-type heading='{{ $heading }}' content='{{ $content }}' link='{{ $link }}' image='{{ $image }}' />
      @endforeach
    </div>
  </section>
@endif
