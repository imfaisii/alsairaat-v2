
<?php $__env->startSection('content'); ?>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Expense Types Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newExpenseType">
                        <i data-feather="plus"></i>
                        &nbsp;New Expense Type
                    </button>
                </div>
                <div class="card-body">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.expense-types-table', [])->html();
} elseif ($_instance->childHasBeenRendered('bRKBe6Y')) {
    $componentId = $_instance->getRenderedChildComponentId('bRKBe6Y');
    $componentTag = $_instance->getRenderedChildComponentTagName('bRKBe6Y');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bRKBe6Y');
} else {
    $response = \Livewire\Livewire::mount('tables.expense-types-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('bRKBe6Y', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
    $html = \Livewire\Livewire::mount('dashboard.expenses-type-management.create-component', [])->html();
} elseif ($_instance->childHasBeenRendered('H7RHpx2')) {
    $componentId = $_instance->getRenderedChildComponentId('H7RHpx2');
    $componentTag = $_instance->getRenderedChildComponentTagName('H7RHpx2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('H7RHpx2');
} else {
    $response = \Livewire\Livewire::mount('dashboard.expenses-type-management.create-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('H7RHpx2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsairaat\resources\views/expense-types-management/index.blade.php ENDPATH**/ ?>