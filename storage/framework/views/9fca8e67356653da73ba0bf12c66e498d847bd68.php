<?php $__env->startPush('extended-css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/vendors/css/extensions/sweetalert2.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('app-assets/css/plugins/extensions/ext-component-sweet-alerts.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('extended-js'); ?>
    <script src="<?php echo e(asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js')); ?>"></script>

    <script>
        $(".sw-cnfrm").click(function(e) {
            e.preventDefault();
            let id = $(this).data('id');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-outline-danger ms-1'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    Livewire.emit('deleteUser', id)
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\alsairaat\resources\views/vendors/sweet-alert.blade.php ENDPATH**/ ?>