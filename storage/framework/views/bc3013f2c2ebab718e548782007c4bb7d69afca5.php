<div wire:ignore.self class="modal fade" id="plotSold" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <?php if($sale): ?>
                    <div class="text-center mb-2">
                        <h1 class="mb-1">Plot Sell Information</h1>
                    </div>
                    <div class="text-center">
                        <p>This Plot was sold to <?php echo e($sale?->customer->name); ?> at Price
                            <?php echo e($sale->price - $sale->discount); ?> on
                            <?php echo e($sale->created_at->format('l F j, Y h:m:i A')); ?></p>
                        <img src="<?php echo e(asset('app-assets/images/illustration/pricing-Illustration.svg')); ?>" height="218"
                            alt="illustration">
                    </div>
                <?php endif; ?>
                <div wire:loading class="text-center">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\alsairaat\resources\views/livewire/dashboard/sales-management/plot-sold-component.blade.php ENDPATH**/ ?>