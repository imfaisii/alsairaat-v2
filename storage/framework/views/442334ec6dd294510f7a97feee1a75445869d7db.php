
<?php $__env->startSection('content'); ?>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Users Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newUser">
                        <i data-feather="plus"></i>
                        &nbsp;New User
                    </button>
                </div>
                <div class="card-body">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.users-table', [])->html();
} elseif ($_instance->childHasBeenRendered('4Y5oRHv')) {
    $componentId = $_instance->getRenderedChildComponentId('4Y5oRHv');
    $componentTag = $_instance->getRenderedChildComponentTagName('4Y5oRHv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4Y5oRHv');
} else {
    $response = \Livewire\Livewire::mount('tables.users-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('4Y5oRHv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
        </div>
    </div>

    <!-- create modal -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.user-management.create-component', [])->html();
} elseif ($_instance->childHasBeenRendered('qLKVAqW')) {
    $componentId = $_instance->getRenderedChildComponentId('qLKVAqW');
    $componentTag = $_instance->getRenderedChildComponentTagName('qLKVAqW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qLKVAqW');
} else {
    $response = \Livewire\Livewire::mount('dashboard.user-management.create-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('qLKVAqW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsairaat\resources\views/user-management/index.blade.php ENDPATH**/ ?>