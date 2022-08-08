<!-- BEGIN: Vendor JS-->
<script src="<?php echo e(asset('app-assets/vendors/js/vendors.min.js')); ?>"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo e(asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')); ?>"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo e(asset('app-assets/js/core/app-menu.min.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/js/core/app.min.js')); ?>"></script>
<!-- END: Theme JS-->

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
<?php /**PATH C:\laragon\www\alsairaat\resources\views/partials/guest/scripts.blade.php ENDPATH**/ ?>