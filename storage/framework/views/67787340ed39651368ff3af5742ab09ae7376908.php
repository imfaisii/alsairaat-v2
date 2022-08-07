
<?php $__env->startSection('content'); ?>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Societies Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newSociety">
                        <i data-feather="plus"></i>
                        &nbsp;New Society
                    </button>
                </div>
                <div class="card-body">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.societies-table', [])->html();
} elseif ($_instance->childHasBeenRendered('Ym4oyAT')) {
    $componentId = $_instance->getRenderedChildComponentId('Ym4oyAT');
    $componentTag = $_instance->getRenderedChildComponentTagName('Ym4oyAT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Ym4oyAT');
} else {
    $response = \Livewire\Livewire::mount('tables.societies-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('Ym4oyAT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
    $html = \Livewire\Livewire::mount('dashboard.society-management.create-component', [])->html();
} elseif ($_instance->childHasBeenRendered('doZZNhq')) {
    $componentId = $_instance->getRenderedChildComponentId('doZZNhq');
    $componentTag = $_instance->getRenderedChildComponentTagName('doZZNhq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('doZZNhq');
} else {
    $response = \Livewire\Livewire::mount('dashboard.society-management.create-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('doZZNhq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsairaat\resources\views/society-management/index.blade.php ENDPATH**/ ?>