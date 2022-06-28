<section class='px-5 pb-16 lg:pr-20 xl:pl-12 xl:pr-32 xl:pb-32'>
  <div class='pt-32 lg:pt-16'>
    <x-rule type='2' heading='' subheading='' />
  </div>
  <div class='flex items-center justify-between'>
    <h3>Destinations</h3>
    @include('sections.destinations.filter')
    <div class='btn-pickers'>
      <button class='btn-picker js-layout' data-layout='list'>List</button>
      <button class='btn-picker js-layout is-active' data-layout='map'>Map</button>
    </div>
  </div>
  @include('sections.destinations.list')
  @include('sections.destinations.map')
</section>
