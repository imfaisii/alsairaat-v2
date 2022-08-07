<?php $__env->startPush('extended-css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/vendors/css/extensions/toastr.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/css/plugins/extensions/ext-component-toastr.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('extended-js'); ?>
    <script src="<?php echo e(asset('app-assets/vendors/js/extensions/toastr.min.js')); ?>"></script>
    <script>
        function makeToastr(type, heading = "Notification", message) {
            toastr[type](
                message,
                heading, {
                    closeButton: true,
                    tapToDismiss: false,
                    progressBar: true,
                }
            );
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\alsairaat\resources\views/vendors/toastr.blade.php ENDPATH**/ ?>