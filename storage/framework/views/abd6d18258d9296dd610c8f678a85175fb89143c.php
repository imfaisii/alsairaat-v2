
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
} elseif ($_instance->childHasBeenRendered('XV3pbmg')) {
    $componentId = $_instance->getRenderedChildComponentId('XV3pbmg');
    $componentTag = $_instance->getRenderedChildComponentTagName('XV3pbmg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XV3pbmg');
} else {
    $response = \Livewire\Livewire::mount('tables.plots-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('XV3pbmg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
} elseif ($_instance->childHasBeenRendered('bLm5QaQ')) {
    $componentId = $_instance->getRenderedChildComponentId('bLm5QaQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('bLm5QaQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bLm5QaQ');
} else {
    $response = \Livewire\Livewire::mount('dashboard.plot-management.create-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('bLm5QaQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- create customer modal -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.customers-management.create-component', [])->html();
} elseif ($_instance->childHasBeenRendered('kIIRXFJ')) {
    $componentId = $_instance->getRenderedChildComponentId('kIIRXFJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('kIIRXFJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('kIIRXFJ');
} else {
    $response = \Livewire\Livewire::mount('dashboard.customers-management.create-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('kIIRXFJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.sales-management.plot-sold-component', [])->html();
} elseif ($_instance->childHasBeenRendered('PabroxA')) {
    $componentId = $_instance->getRenderedChildComponentId('PabroxA');
    $componentTag = $_instance->getRenderedChildComponentTagName('PabroxA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PabroxA');
} else {
    $response = \Livewire\Livewire::mount('dashboard.sales-management.plot-sold-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('PabroxA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.sales-management.plot-history-component', [])->html();
} elseif ($_instance->childHasBeenRendered('0fvLDKX')) {
    $componentId = $_instance->getRenderedChildComponentId('0fvLDKX');
    $componentTag = $_instance->getRenderedChildComponentTagName('0fvLDKX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0fvLDKX');
} else {
    $response = \Livewire\Livewire::mount('dashboard.sales-management.plot-history-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('0fvLDKX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('extended-js'); ?>
    <script src="<?php echo e(asset('app-assets/js/scripts/components/components-accordion.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsairaat\resources\views/plot-management/index.blade.php ENDPATH**/ ?>