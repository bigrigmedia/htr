@php
  $regions = get_terms([
    'taxonomy'    => 'region',
    'hide_empty'  => false,
  ]);
@endphp
<form class='hidden js-filter' method='post' action='/'>
  @foreach($regions as $region)
    <div class='flex flex-row-reverse items-center justify-between'>
      <label class='block text-left'>{{ $region->name }}</label>
      <input class='m-0' type='checkbox' name='region' value='{{ $region->slug }}' />
    </div>
  @endforeach
</form>
