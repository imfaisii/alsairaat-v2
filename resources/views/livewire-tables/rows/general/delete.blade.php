<!-- delete button -->
<button wire:loading.attr="disabled" wire:click="$emit('deleteUser','{{ $value }}')" class="btn btn-danger btn-sm"
    style="padding: 0.286rem 0.6rem !important;font-size: 0.8rem !important;">
    <i class="fas fa-trash"></i>
</button>
