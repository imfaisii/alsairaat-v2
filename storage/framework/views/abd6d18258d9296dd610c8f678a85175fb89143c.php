
<?php $__env->startSection('content'); ?>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Plots Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPlot">
                        <i data-feather="plus"></i>
                        &nbsp;New Plot
                    </button>
                </div>
                <div class="card-body">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.plots-table', [])->html();
} elseif ($_instance->childHasBeenRendered('PDA3bGm')) {
    $componentId = $_instance->getRenderedChildComponentId('PDA3bGm');
    $componentTag = $_instance->getRenderedChildComponentTagName('PDA3bGm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PDA3bGm');
} else {
    $response = \Livewire\Livewire::mount('tables.plots-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('PDA3bGm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
    $html = \Livewire\Livewire::mount('dashboard.plot-management.create-component', [])->html();
} elseif ($_instance->childHasBeenRendered('eZS1vn6')) {
    $componentId = $_instance->getRenderedChildComponentId('eZS1vn6');
    $componentTag = $_instance->getRenderedChildComponentTagName('eZS1vn6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('eZS1vn6');
} else {
    $response = \Livewire\Livewire::mount('dashboard.plot-management.create-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('eZS1vn6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsairaat\resources\views/plot-management/index.blade.php ENDPATH**/ ?>