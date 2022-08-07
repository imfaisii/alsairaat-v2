
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
} elseif ($_instance->childHasBeenRendered('d8hJbAO')) {
    $componentId = $_instance->getRenderedChildComponentId('d8hJbAO');
    $componentTag = $_instance->getRenderedChildComponentTagName('d8hJbAO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('d8hJbAO');
} else {
    $response = \Livewire\Livewire::mount('tables.users-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('d8hJbAO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
} elseif ($_instance->childHasBeenRendered('b1uw5EC')) {
    $componentId = $_instance->getRenderedChildComponentId('b1uw5EC');
    $componentTag = $_instance->getRenderedChildComponentTagName('b1uw5EC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('b1uw5EC');
} else {
    $response = \Livewire\Livewire::mount('dashboard.user-management.create-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('b1uw5EC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsairaat\resources\views/user-management/index.blade.php ENDPATH**/ ?>