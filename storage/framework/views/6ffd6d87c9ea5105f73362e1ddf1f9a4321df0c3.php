<div>
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>">
                        <span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                        x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill:currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <h2 class="brand-text"><?php echo e(config('app.name')); ?></h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc">
                        </i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item <?php if(Route::is('dashboard')): ?> active <?php endif; ?>">
                    <a class="d-flex align-items-center" href="<?php echo e(route('dashboard')); ?>">
                        <i data-feather="home"></i>
                        <span class="menu-title text-truncate" data-i18n="Todo">Dashboard</span>
                    </a>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('is-s')): ?>
                    <li class="navigation-header"><span data-i18n="User &amp; Management">User Management</span>
                        <i data-feather="more-horizontal"></i>
                    </li>
                    <li class="nav-item <?php if(Route::is('user.management')): ?> open <?php endif; ?>">
                        <a class="d-flex align-items-center" href="#">
                            <i data-feather="users"></i>
                            <span class="menu-title text-truncate" data-i18n="Invoice">Users</span>
                        </a>
                        <ul class="menu-content">
                            <li <?php if(Route::is('user.management')): ?> class="active" <?php endif; ?>>
                                <a class="d-flex align-items-center" href="<?php echo e(route('user.management')); ?>">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="List">Create/View</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('is-sa')): ?>
                    <li class="navigation-header"><span data-i18n="Society &amp; Management">Society Management</span>
                        <i data-feather="more-horizontal"></i>
                    </li>
                    <li class="nav-item <?php if(Route::is('society.management')): ?> open <?php endif; ?>">
                        <a class="d-flex align-items-center" href="#">
                            <i data-feather="map"></i>
                            <span class="menu-title text-truncate" data-i18n="Invoice">Societies</span>
                        </a>
                        <ul class="menu-content">
                            <li <?php if(Route::is('society.management')): ?> class="active" <?php endif; ?>>
                                <a class="d-flex align-items-center" href="<?php echo e(route('society.management')); ?>">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="List">Create/View</span>
                                </a>
                            </li>
                        </ul>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('is-s')): ?>
                            <ul class="menu-content">
                                <li <?php if(Route::is('society.management.assign')): ?> class="active" <?php endif; ?>>
                                    <a class="d-flex align-items-center" href="<?php echo e(route('society.management.assign')); ?>">
                                        <i data-feather="circle"></i>
                                        <span class="menu-item text-truncate" data-i18n="List">Assign Societies</span>
                                    </a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </li>
                    <li class="navigation-header"><span data-i18n="Plots &amp; Management">Plots Management</span>
                        <i data-feather="more-horizontal"></i>
                    </li>
                    <li class="nav-item <?php if(Route::is('plot.management')): ?> open <?php endif; ?>">
                        <a class="d-flex align-items-center" href="#">
                            <i data-feather="box"></i>
                            <span class="menu-title text-truncate" data-i18n="Invoice">Plots</span>
                        </a>
                        <ul class="menu-content">
                            <li <?php if(Route::is('plot.types.management')): ?> class="active" <?php endif; ?>>
                                <a class="d-flex align-items-center" href="<?php echo e(route('plot.types.management')); ?>">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="List">Plot Type(s)</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="menu-content">
                            <li <?php if(Route::is('plot.management')): ?> class="active" <?php endif; ?>>
                                <a class="d-flex align-items-center" href="<?php echo e(route('plot.management')); ?>">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="List">Create/View</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="navigation-header"><span data-i18n="Expenses &amp; Management">Expenses Management</span>
                        <i data-feather="more-horizontal"></i>
                    </li>
                    <li class="nav-item <?php if(Route::is('expense.management')): ?> open <?php endif; ?>">
                        <a class="d-flex align-items-center" href="#">
                            <i data-feather="credit-card"></i>
                            <span class="menu-title text-truncate" data-i18n="Invoice">Expenses</span>
                        </a>
                        <ul class="menu-content">
                            <li <?php if(Route::is('expense.types.management')): ?> class="active" <?php endif; ?>>
                                <a class="d-flex align-items-center" href="<?php echo e(route('expense.types.management')); ?>">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="List">Expense Type(s)</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="menu-content">
                            <li <?php if(Route::is('expense.management')): ?> class="active" <?php endif; ?>>
                                <a class="d-flex align-items-center" href="<?php echo e(route('expense.management')); ?>">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="List">Create/View</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\alsairaat\resources\views/livewire/partials/side-bar.blade.php ENDPATH**/ ?>