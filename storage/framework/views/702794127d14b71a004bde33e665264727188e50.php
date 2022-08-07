<!-- BEGIN: Vendor JS-->
<script src="<?php echo e(asset('app-assets/vendors/js/vendors.min.js')); ?>"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo e(asset('app-assets/vendors/js/charts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/vendors/js/extensions/toastr.min.js')); ?>"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo e(asset('app-assets/js/core/app-menu.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/js/core/app.js')); ?>"></script>
<!-- END: Theme JS-->

<?php if(Route::is('dashboard')): ?>
    <!-- BEGIN: Page JS-->
    <script src="<?php echo e(asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')); ?>"></script>
    <!-- END: Page JS-->
<?php endif; ?>
<script src="<?php echo e(asset('js/global-events.js')); ?>"></script>
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
<?php /**PATH C:\laragon\www\alsairaat\resources\views/partials/app/scripts.blade.php ENDPATH**/ ?>