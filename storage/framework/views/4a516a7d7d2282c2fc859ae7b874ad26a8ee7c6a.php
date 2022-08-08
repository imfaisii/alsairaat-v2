
<?php $__env->startSection('content'); ?>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Plot Types Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPlotType">
                        <i data-feather="plus"></i>
                        &nbsp;New Plot Type
                    </button>
                </div>
                <div class="card-body">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.plot-types-table', [])->html();
} elseif ($_instance->childHasBeenRendered('Bebbt0D')) {
    $componentId = $_instance->getRenderedChildComponentId('Bebbt0D');
    $componentTag = $_instance->getRenderedChildComponentTagName('Bebbt0D');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Bebbt0D');
} else {
    $response = \Livewire\Livewire::mount('tables.plot-types-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('Bebbt0D', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
    $html = \Livewire\Livewire::mount('dashboard.plot-type-management.create-component', [])->html();
} elseif ($_instance->childHasBeenRendered('SE5WM7w')) {
    $componentId = $_instance->getRenderedChildComponentId('SE5WM7w');
    $componentTag = $_instance->getRenderedChildComponentTagName('SE5WM7w');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('SE5WM7w');
} else {
    $response = \Livewire\Livewire::mount('dashboard.plot-type-management.create-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('SE5WM7w', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsairaat\resources\views/plot-types-management/index.blade.php ENDPATH**/ ?>