<div>
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#">
                            <i class="ficon" data-feather="menu"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-style">
                            <i class="ficon" data-feather="moon"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-search">
                        <a class="nav-link nav-link-search">
                            <i class="ficon" data-feather="search"></i>
                        </a>
                        <div class="search-input">
                            <div class="search-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text"
                                placeholder="Explore <?php echo e(config('app.name')); ?>..." tabindex="-1" data-search="search">
                            <div class="search-input-close"><i data-feather="x"></i></div>
                            <ul class="search-list search-list-main"></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name fw-bolder">
                                <?php echo e($user->name); ?>

                            </span>
                            <span class="user-status" style="margin-top: 6px;"><?php echo e(ucwords($user->role)); ?></span>
                        </div>
                        <span class="avatar">
                            <img class="round" src="<?php echo e(asset('app-assets/images/portrait/small/avatar-s-11.jpg')); ?>"
                                alt="avatar" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="#">
                            <i class="me-50" data-feather="user"></i>
                            Profile
                        </a>
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="me-50" data-feather="power"></i>
                                Logout
                            </a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center">
            <a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="me-75"><img src="<?php echo e(asset('app-assets/images/icons/doc.png')); ?>" alt="png"
                            height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">File.doc</p><small class="text-muted">Society</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a>
        </li>
        <li class="d-flex align-items-center">
            <a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75">
                        <img src="<?php echo e(asset('app-assets/images/portrait/small/avatar-s-8.jpg')); ?>" alt="png"
                            height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">Agent 1</small>
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start">
                    <span class="me-75" data-feather="alert-circle"></span>
                    <span>No results found.</span>
                </div>
            </a>
        </li>
    </ul>
</div>
<?php /**PATH C:\laragon\www\alsairaat\resources\views/livewire/partials/header.blade.php ENDPATH**/ ?>