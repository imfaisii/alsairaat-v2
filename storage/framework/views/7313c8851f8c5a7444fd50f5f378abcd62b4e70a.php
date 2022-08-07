
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.home', [])->html();
} elseif ($_instance->childHasBeenRendered('vt5T87F')) {
    $componentId = $_instance->getRenderedChildComponentId('vt5T87F');
    $componentTag = $_instance->getRenderedChildComponentTagName('vt5T87F');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vt5T87F');
} else {
    $response = \Livewire\Livewire::mount('dashboard.home', []);
    $html = $response->html();
    $_instance->logRenderedChild('vt5T87F', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsairaat\resources\views/dashboard.blade.php ENDPATH**/ ?>