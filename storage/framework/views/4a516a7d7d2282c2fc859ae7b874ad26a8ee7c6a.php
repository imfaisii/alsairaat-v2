
<?php $__env->startSection('content'); ?>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Plots Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPlotType">
                        <i data-feather="plus"></i>
                        &nbsp;New Plot Type
                    </button>
                </div>
                <div class="card-body">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.plot-types-table', [])->html();
} elseif ($_instance->childHasBeenRendered('rpd5k9A')) {
    $componentId = $_instance->getRenderedChildComponentId('rpd5k9A');
    $componentTag = $_instance->getRenderedChildComponentTagName('rpd5k9A');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rpd5k9A');
} else {
    $response = \Livewire\Livewire::mount('tables.plot-types-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('rpd5k9A', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
} elseif ($_instance->childHasBeenRendered('ovWYy7E')) {
    $componentId = $_instance->getRenderedChildComponentId('ovWYy7E');
    $componentTag = $_instance->getRenderedChildComponentTagName('ovWYy7E');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ovWYy7E');
} else {
    $response = \Livewire\Livewire::mount('dashboard.plot-type-management.create-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('ovWYy7E', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsairaat\resources\views/plot-types-management/index.blade.php ENDPATH**/ ?>