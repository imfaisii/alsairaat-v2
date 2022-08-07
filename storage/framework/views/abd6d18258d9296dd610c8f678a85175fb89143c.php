
<?php $__env->startPush('extended-css'); ?>
    <style>
        .customer-sale {
            border: transparent;
        }
    </style>
<?php $__env->stopPush(); ?>
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
} elseif ($_instance->childHasBeenRendered('LhkKWTE')) {
    $componentId = $_instance->getRenderedChildComponentId('LhkKWTE');
    $componentTag = $_instance->getRenderedChildComponentTagName('LhkKWTE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LhkKWTE');
} else {
    $response = \Livewire\Livewire::mount('tables.plots-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('LhkKWTE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
} elseif ($_instance->childHasBeenRendered('LOao6sr')) {
    $componentId = $_instance->getRenderedChildComponentId('LOao6sr');
    $componentTag = $_instance->getRenderedChildComponentTagName('LOao6sr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LOao6sr');
} else {
    $response = \Livewire\Livewire::mount('dashboard.plot-management.create-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('LOao6sr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- create customer modal -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.customers-management.create-component', [])->html();
} elseif ($_instance->childHasBeenRendered('LYS3Ks9')) {
    $componentId = $_instance->getRenderedChildComponentId('LYS3Ks9');
    $componentTag = $_instance->getRenderedChildComponentTagName('LYS3Ks9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LYS3Ks9');
} else {
    $response = \Livewire\Livewire::mount('dashboard.customers-management.create-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('LYS3Ks9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.sales-management.plot-sold-component', [])->html();
} elseif ($_instance->childHasBeenRendered('DpKMTIk')) {
    $componentId = $_instance->getRenderedChildComponentId('DpKMTIk');
    $componentTag = $_instance->getRenderedChildComponentTagName('DpKMTIk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DpKMTIk');
} else {
    $response = \Livewire\Livewire::mount('dashboard.sales-management.plot-sold-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('DpKMTIk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsairaat\resources\views/plot-management/index.blade.php ENDPATH**/ ?>