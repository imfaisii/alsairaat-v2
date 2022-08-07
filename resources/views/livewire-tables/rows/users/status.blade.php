<!-- status -->
@if ($value == 'active')
    <span class="badge bg-success">{{ $value }}</span>
@else
    <span class="badge bg-danger">{{ $value }}</span>
@endif
