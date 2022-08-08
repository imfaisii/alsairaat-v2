<div wire:ignore.self class="modal fade" id="plotExpenseHistory" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div wire:submit.prevent='store' class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Plot Expense History</h1>
                </div>
                <?php if(count($history) > 0): ?>
                    <div class="accordion" id="accordionHover" data-toggle-hover="true">
                        <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $payments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingHover<?php echo e($loop->iteration); ?>">
                                    <button class="accordion-button collapsed accordion-hover-title" type="button"
                                        style="background: lightgoldenrodyellow;color:black;" data-bs-toggle="collapse"
                                        data-bs-target="#accordionHover<?php echo e($loop->iteration); ?>" aria-expanded="false"
                                        aria-controls="accordionHover<?php echo e($loop->iteration); ?>">
                                        <?php echo e($date); ?>

                                        &nbsp;&nbsp;&nbsp;
                                        <span class="badge bg-success"> <?php echo e(count($payments)); ?>

                                            Payment(s)
                                        </span>
                                    </button>
                                </h2>
                                <div id="accordionHover<?php echo e($loop->iteration); ?>" class="accordion-collapse collapse"
                                    aria-labelledby="headingHover<?php echo e($loop->iteration); ?>"
                                    data-bs-parent="#accordionHover">
                                    <div class="accordion-body">
                                        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>Paid an amount of Rs. <?php echo e($payment['amount']); ?> in an expense of
                                                <?php echo e($payment['expense']['expense_type']['name']); ?>.
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <div wire:loading.remove class="accordion-item">
                        <h2 class="accordion-header" id="headingHoverOne">
                            <button class="accordion-button collapsed accordion-hover-title" type="button"
                                style="background: lightgoldenrodyellow;color:black;" data-bs-toggle="collapse"
                                data-bs-target="#accordionHoverOne" aria-expanded="false"
                                aria-controls="accordionHoverOne">
                                No payments.
                            </button>
                        </h2>
                    </div>
                    <div wire:loading class="text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\alsairaat\resources\views/livewire/dashboard/sales-management/plot-history-component.blade.php ENDPATH**/ ?>