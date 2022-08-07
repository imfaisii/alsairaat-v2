<div>
    <h4 class="card-title mt-2">Plot Details</h4>
    <form wire:submit.prevent='storePlotSale' class="row gy-1 pt-75">
        <div class="col-12 col-md-4">
            <label class="form-label">Sale Price</label>
            <input wire:model.lazy='sale.price' type="number"
                class="form-control <?php $__errorArgs = ['sale.price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Some Price">
            <?php $__errorArgs = ['sale.price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><b><?php echo e($message); ?></b></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="col-12 col-md-4">
            <label class="form-label">Discount</label>
            <input wire:model.lazy='sale.discount' type="number"
                class="form-control <?php $__errorArgs = ['sale.discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Some Discount">
            <?php $__errorArgs = ['sale.discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><b><?php echo e($message); ?></b></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="col-12 col-md-4">
            <label class="form-label">Reference</label>
            <input wire:model.lazy='sale.reference' type="text"
                class="form-control <?php $__errorArgs = ['sale.reference'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Some Reference">
            <?php $__errorArgs = ['sale.reference'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><b><?php echo e($message); ?></b></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="col-12 text-center mt-2 pt-50">
            <button type="submit" class="btn btn-primary me-1">Save Record</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                Discard
            </button>
        </div>
    </form>
</div>
<?php /**PATH C:\laragon\www\alsairaat\resources\views/livewire/dashboard/sales-management/plot-sale-component.blade.php ENDPATH**/ ?>