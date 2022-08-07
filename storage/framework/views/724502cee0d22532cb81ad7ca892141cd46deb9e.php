<div class="card">
    <div class="card-header">
        <h4 class="card-title breadcrumb-card-head transform-me"><?php echo e(ucwords(collect(request()->segments())->last())); ?>

        </h4>
    </div>
    <div class="card-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php $segments = ''; ?>
                <?php $__currentLoopData = request()->segments(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $segment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key == 0 && !Route::is('dashboard')): ?>
                        <li class="breadcrumb-item">
                            <a class="transform-me" href="<?php echo e(route('dashboard')); ?>">
                                Dashboard
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php $segments .= '/' . $segment; ?>
                    <li class="breadcrumb-item">
                        <a class="transform-me" href="<?php echo e($segments); ?>">
                            <?php echo e(ucwords($segment)); ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
        </nav>
    </div>
</div>
<?php /**PATH C:\laragon\www\alsairaat\resources\views/components/bread-crumb-component.blade.php ENDPATH**/ ?>