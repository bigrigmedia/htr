@if( class_exists('ACF') )
  @php
    $i = 1;
  @endphp

  @if(have_rows('components'))
    @while(have_rows('components')) @php the_row() @endphp
      @php
        // Component Type
        $component = get_sub_field('component') ?? null;

        // Component Data
        $intro_content = get_sub_field('intro') ?? null;
        $rule_type = get_sub_field('rule_heading') ?? null;
        $rule_heading = get_sub_field('heading') ?? null;
        $rule_button_url = get_sub_field('button_url') ?? null;
        $rule_button_text = get_sub_field('button_text') ?? null;
        $image_with_text_image = get_sub_field('image') ?? null;
        $image_with_text_content = get_sub_field('content') ?? null;
        $testimonial_mobile = get_sub_field('testimonial_background_mobile')['sizes']['w444x742'] ?? null;
        $testimonial_desktop = get_sub_field('testimonial_background_desktop')['sizes']['w1917x1058'] ?? null;
        $testimonial_content = get_sub_field('testimonial_content') ?? null;
        $cta_content = get_sub_field('call_to_action_content') ?? null;
        $cta_height = get_sub_field('call_to_action_max_height') ?? null;
        $cta_mobile = get_sub_field('call_to_action_background')['sizes']['w1070x582'] ?? null;
        $cta_desktop = get_sub_field('call_to_action_background')['sizes']['w1748x858'] ?? null;
        $collage_mobile = get_sub_field('collage_background_mobile')['sizes']['w444x742'] ?? null;
        $collage_desktop = get_sub_field('collage_background_desktop')['sizes']['w1917x1058'] ?? null;
        $collection_content = get_sub_field('collection_content') ?? null;
        $collecion_destinations = get_sub_field('collection_destinations') ?? null;
      @endphp
      @switch($component)
        @case('intro')
          @include('components.intro', ['intro' => $intro_content])
        @break
        @case('image-with-text')
          @include('components.image-with-text', ['rule' => $rule_type, 'heading' => $rule_heading, 'url' => $rule_button_url, 'text' => $rule_button_text, 'image' => $image_with_text_image, 'content' => $image_with_text_content])
        @break
        @case('testimonial')
          @include('components.testimonial', ['quote' => $testimonial_content, 'mobile' => $testimonial_mobile, 'desktop' => $testimonial_desktop])
        @break
        @case('destinations')
          @include('sections.home.destinations')
        @break
        @case('cta')
          @include('components.call-to-action', ['heading' => $cta_content, 'height' => $cta_height, 'mobile' => $cta_mobile, 'desktop' => $cta_desktop])
        @break
        @case('image-collage')
          @include('components.collage', ['mobile' => $collage_mobile, 'desktop' => $collage_desktop])
        @break
        @case('collection')
          @include('components.collection', ['content' => $collection_content, 'destinations' => $collecion_destinations])
      @endswitch
      @php $i++ @endphp
    @endwhile
  @endif
@endif
