
<?php $__env->startSection('content'); ?>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Societies Restrictions Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#newSocietyRestriction">
                        <i data-feather="plus"></i>
                        &nbsp;New Society Restriction
                    </button>
                </div>
                <div class="card-body">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.societies-restrictions-table', [])->html();
} elseif ($_instance->childHasBeenRendered('AfH9YyI')) {
    $componentId = $_instance->getRenderedChildComponentId('AfH9YyI');
    $componentTag = $_instance->getRenderedChildComponentTagName('AfH9YyI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AfH9YyI');
} else {
    $response = \Livewire\Livewire::mount('tables.societies-restrictions-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('AfH9YyI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
    $html = \Livewire\Livewire::mount('dashboard.society-management.create-restriction-component', [])->html();
} elseif ($_instance->childHasBeenRendered('iSqpFg9')) {
    $componentId = $_instance->getRenderedChildComponentId('iSqpFg9');
    $componentTag = $_instance->getRenderedChildComponentTagName('iSqpFg9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iSqpFg9');
} else {
    $response = \Livewire\Livewire::mount('dashboard.society-management.create-restriction-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('iSqpFg9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsairaat\resources\views/society-management/assign.blade.php ENDPATH**/ ?>