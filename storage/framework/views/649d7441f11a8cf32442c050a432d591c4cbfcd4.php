<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <?php echo $__env->make('partials.app.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('vendors.toastr', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('vendors.sweet-alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <?php echo $__env->yieldPushContent('extended-css'); ?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('partials.header', [])->html();
} elseif ($_instance->childHasBeenRendered('OOwOC3E')) {
    $componentId = $_instance->getRenderedChildComponentId('OOwOC3E');
    $componentTag = $_instance->getRenderedChildComponentTagName('OOwOC3E');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('OOwOC3E');
} else {
    $response = \Livewire\Livewire::mount('partials.header', []);
    $html = $response->html();
    $_instance->logRenderedChild('OOwOC3E', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <!-- END: Header-->


        <!-- BEGIN: Main Menu-->
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('partials.side-bar', [])->html();
} elseif ($_instance->childHasBeenRendered('xIHItRc')) {
    $componentId = $_instance->getRenderedChildComponentId('xIHItRc');
    $componentTag = $_instance->getRenderedChildComponentTagName('xIHItRc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xIHItRc');
} else {
    $response = \Livewire\Livewire::mount('partials.side-bar', []);
    $html = $response->html();
    $_instance->logRenderedChild('xIHItRc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <!-- END: Main Menu-->

            <!-- BEGIN: Content-->
            <div class="app-content content ">
                <div class="content-overlay"></div>
                <div class="header-navbar-shadow"></div>
                <div class="content-wrapper container-xxl p-0">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <?php if(!Route::is('dashboard')): ?>
                            <?php if (isset($component)) { $__componentOriginald79452ba1da3e7265dc0a81c630ca4ba0d94fb35 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\BreadCrumbComponent::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bread-crumb-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\BreadCrumbComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald79452ba1da3e7265dc0a81c630ca4ba0d94fb35)): ?>
<?php $component = $__componentOriginald79452ba1da3e7265dc0a81c630ca4ba0d94fb35; ?>
<?php unset($__componentOriginald79452ba1da3e7265dc0a81c630ca4ba0d94fb35); ?>
<?php endif; ?>
                        <?php endif; ?>
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
            <!-- END: Content-->

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('partials.footer', [])->html();
} elseif ($_instance->childHasBeenRendered('yqA0QIO')) {
    $componentId = $_instance->getRenderedChildComponentId('yqA0QIO');
    $componentTag = $_instance->getRenderedChildComponentTagName('yqA0QIO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yqA0QIO');
} else {
    $response = \Livewire\Livewire::mount('partials.footer', []);
    $html = $response->html();
    $_instance->logRenderedChild('yqA0QIO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                <?php echo $__env->make('partials.app.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('partials.app.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldPushContent('extended-js'); ?>
</body>
<!-- END: Body-->

</html>
<?php /**PATH C:\laragon\www\alsairaat\resources\views/layouts/app.blade.php ENDPATH**/ ?>