@if($type === 'rule-1')
  <div class='rule-1'>
    @if($heading)
      <span>{{ $heading }}</span>
    @endif
    @if($subheading)
      <span>{{ $subheading }}</span>
    @endif
  </div>
@else
  <div class='rule-2'>
    @if($heading)
      <span>{{ $heading }}</span>
    @endif
  </div>
@endif
