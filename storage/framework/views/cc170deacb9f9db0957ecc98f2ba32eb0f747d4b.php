<div wire:ignore.self class="modal fade" id="newCustomer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-2 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Plot Sale Information</h1>
                </div>
                <!-- Centered Aligned Tabs starts -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card-body">
                        <div class="col-12 col-md-12">
                            <div class="mb-1">
                                <label class="mb-1" for="">Select Type</label>
                                <select wire:model.lazy='isSelected' class="form-control">
                                    <option value="">Select entry type</option>
                                    <option value="existing">Existing customer</option>
                                    <option value="new">New customer</option>
                                </select>
                            </div>
                        </div>
                        <div wire:loading wire:target='storeNewCustomer' class="text-center">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        <?php if($isSelected): ?>
                            <section id="multiple-column-form" wire:loading.remove wire:target='storeNewCustomer'>
                                <div class="row">
                                    <div class="col-12">
                                        <?php if($isNew): ?>
                                            <form wire:submit.prevent='storeNewCustomer' class="row gy-1 pt-75">
                                                <div class="col-12 col-md-4">
                                                    <label class="form-label">Customer Name</label>
                                                    <input wire:model.lazy='customer.name' type="text"
                                                        class="form-control <?php $__errorArgs = ['customer.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        placeholder="Some Name">
                                                    <?php $__errorArgs = ['customer.name'];
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
                                                    <label class="form-label">Customer Father's Name</label>
                                                    <input wire:model.lazy='customer.father_name' type="text"
                                                        class="form-control <?php $__errorArgs = ['customer.father_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        placeholder="Some Name">
                                                    <?php $__errorArgs = ['customer.father_name'];
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
                                                    <label class="form-label">Customer Husband Name</label>
                                                    <input wire:model.lazy='customer.husband_name' type="text"
                                                        class="form-control <?php $__errorArgs = ['customer.husband_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        placeholder="Some Name">
                                                    <?php $__errorArgs = ['customer.husband_name'];
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
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label">Customer CNIC#</label>
                                                    <input wire:model.lazy='customer.cnic' type="text"
                                                        class="form-control <?php $__errorArgs = ['customer.cnic'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        placeholder="3XXXX-XXXXXXX-X">
                                                    <?php $__errorArgs = ['customer.cnic'];
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
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label">Customer Mobile Number</label>
                                                    <input wire:model.lazy='customer.mobile_number' type="number"
                                                        class="form-control <?php $__errorArgs = ['customer.mobile_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        placeholder="03XXXXXXXXX">
                                                    <?php $__errorArgs = ['customer.mobile_number'];
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
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label">Customer Email Address</label>
                                                    <input wire:model.lazy='customer.email' type="email"
                                                        class="form-control <?php $__errorArgs = ['customer.email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        placeholder="johndoe@example.com">
                                                    <?php $__errorArgs = ['customer.email'];
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
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label">Customer Reference</label>
                                                    <input wire:model.lazy='customer.reference' type="text"
                                                        class="form-control <?php $__errorArgs = ['customer.reference'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        placeholder="Some Name">
                                                    <?php $__errorArgs = ['customer.reference'];
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
                                                <div class="col-12 col-md-12">
                                                    <label class="form-label">Customer Address</label>
                                                    <textarea wire:model.lazy='customer.address' type="text"
                                                        class="form-control <?php $__errorArgs = ['customer.address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Some Address">
                                                        </textarea>
                                                    <?php $__errorArgs = ['customer.address'];
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
                                                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                                                    <button type="reset" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        Discard
                                                    </button>
                                                </div>
                                            </form>
                                        <?php endif; ?>
                                        <?php if($isExisting): ?>
                                            <form wire:submit.prevent='store' class="row gy-1 pt-75">
                                                <div class="col-12 col-md-12">
                                                    <label class="form-label">Customer</label>
                                                    <select wire:model.lazy='custId'
                                                        class="form-control <?php $__errorArgs = ['custId'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                        <option value="">Select the Customer</option>
                                                        <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cust): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <option value="<?php echo e($cust->id); ?>">
                                                                <?php echo e($cust->name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            <option value="">No customer found.</option>
                                                        <?php endif; ?>
                                                    </select>
                                                    <?php $__errorArgs = ['custId'];
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
                                            </form>
                                        <?php endif; ?>
                                        <?php if($sale): ?>
                                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.sales-management.plot-sale-component', [])->html();
} elseif ($_instance->childHasBeenRendered('l3763597145-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3763597145-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3763597145-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3763597145-0');
} else {
    $response = \Livewire\Livewire::mount('dashboard.sales-management.plot-sale-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3763597145-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\alsairaat\resources\views/livewire/dashboard/customers-management/create-component.blade.php ENDPATH**/ ?>