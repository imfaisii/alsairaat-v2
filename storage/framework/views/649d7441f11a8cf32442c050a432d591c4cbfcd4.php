<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <?php echo $__env->make('partials.app.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('vendors.toastr', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
} elseif ($_instance->childHasBeenRendered('AqsKYpu')) {
    $componentId = $_instance->getRenderedChildComponentId('AqsKYpu');
    $componentTag = $_instance->getRenderedChildComponentTagName('AqsKYpu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AqsKYpu');
} else {
    $response = \Livewire\Livewire::mount('partials.header', []);
    $html = $response->html();
    $_instance->logRenderedChild('AqsKYpu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <!-- END: Header-->


        <!-- BEGIN: Main Menu-->
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('partials.side-bar', [])->html();
} elseif ($_instance->childHasBeenRendered('ze8i3VT')) {
    $componentId = $_instance->getRenderedChildComponentId('ze8i3VT');
    $componentTag = $_instance->getRenderedChildComponentTagName('ze8i3VT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ze8i3VT');
} else {
    $response = \Livewire\Livewire::mount('partials.side-bar', []);
    $html = $response->html();
    $_instance->logRenderedChild('ze8i3VT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
            <!-- END: Content-->

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('partials.footer', [])->html();
} elseif ($_instance->childHasBeenRendered('0w7Asc1')) {
    $componentId = $_instance->getRenderedChildComponentId('0w7Asc1');
    $componentTag = $_instance->getRenderedChildComponentTagName('0w7Asc1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0w7Asc1');
} else {
    $response = \Livewire\Livewire::mount('partials.footer', []);
    $html = $response->html();
    $_instance->logRenderedChild('0w7Asc1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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