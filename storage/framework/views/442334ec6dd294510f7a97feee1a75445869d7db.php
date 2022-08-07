
<?php $__env->startSection('content'); ?>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Users Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newUser">
                        New User
                    </button>
                </div>
                <div class="card-body">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.user-management.index-component', [])->html();
} elseif ($_instance->childHasBeenRendered('6u86LsE')) {
    $componentId = $_instance->getRenderedChildComponentId('6u86LsE');
    $componentTag = $_instance->getRenderedChildComponentTagName('6u86LsE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6u86LsE');
} else {
    $response = \Livewire\Livewire::mount('dashboard.user-management.index-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('6u86LsE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
} elseif ($_instance->childHasBeenRendered('nBbhzMF')) {
    $componentId = $_instance->getRenderedChildComponentId('nBbhzMF');
    $componentTag = $_instance->getRenderedChildComponentTagName('nBbhzMF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nBbhzMF');
} else {
    $response = \Livewire\Livewire::mount('dashboard.user-management.create-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('nBbhzMF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsairaat\resources\views/user-management/index.blade.php ENDPATH**/ ?>