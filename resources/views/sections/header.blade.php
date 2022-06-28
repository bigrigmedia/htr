@if(is_page() || is_404())
  @include('sections.header-default')
@elseif(is_singular(['destinations']))
  @include('sections.header-destination')
@endif
