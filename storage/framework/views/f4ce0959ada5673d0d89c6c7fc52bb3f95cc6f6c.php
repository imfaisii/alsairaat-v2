
<?php $__env->startSection('content'); ?>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Expenses Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newExpense">
                        <i data-feather="plus"></i>
                        &nbsp;New Expense
                    </button>
                </div>
                <div class="card-body">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.expenses-table', [])->html();
} elseif ($_instance->childHasBeenRendered('yRWgLJf')) {
    $componentId = $_instance->getRenderedChildComponentId('yRWgLJf');
    $componentTag = $_instance->getRenderedChildComponentTagName('yRWgLJf');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yRWgLJf');
} else {
    $response = \Livewire\Livewire::mount('tables.expenses-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('yRWgLJf', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
    $html = \Livewire\Livewire::mount('dashboard.expenses-management.create-component', [])->html();
} elseif ($_instance->childHasBeenRendered('8fJd1Gg')) {
    $componentId = $_instance->getRenderedChildComponentId('8fJd1Gg');
    $componentTag = $_instance->getRenderedChildComponentTagName('8fJd1Gg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8fJd1Gg');
} else {
    $response = \Livewire\Livewire::mount('dashboard.expenses-management.create-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('8fJd1Gg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsairaat\resources\views/expense-management/index.blade.php ENDPATH**/ ?>