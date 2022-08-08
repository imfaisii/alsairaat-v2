<!-- delete button -->

<button data-id="{{ $value }}" class="sw-cnfrm badge badge-glow bg-danger"
    style="padding: 0.486rem 0.9rem !important; font-size: 0.8rem !important; border: transparent;">
    <i class="fas fa-trash fa-sm"></i>
</button>
@if (Route::is('plot.management'))
    <button wire:click="$emit('setPlotHistory', {{ $value }})" class="badge badge-glow bg-info"
        data-bs-toggle="modal" data-bs-target="#plotExpenseHistory"
        style="padding: 0.486rem 0.9rem !important; font-size: 0.8rem !important; border: transparent;">
        <i class="fas fa-eye fa-sm"></i>
    </button>
@endif
