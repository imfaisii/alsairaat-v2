<!-- delete button -->
<button wire:click="$emit('deleteUser','{{ $value }}')" class="btn btn-danger btn-sm">
    <i class="fas fa-trash"></i>
</button>
