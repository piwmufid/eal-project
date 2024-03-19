<nav class="navbar navbar-expand-lg navbar-dark text-white">
    <div class="container shadow">
        <a class="navbar-brand" href="#">EAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo e($title === 'Home' ? 'active' : ''); ?> " aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e($title === 'Dashboard' ? 'active' : ''); ?>" href="/dashboard">Dashboard</a>
                </li>
            </ul>

            <?php if(auth()->guard()->check()): ?>
                <li class="nav-item dropdown g-5" style="list-style: none">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="img/profile.svg" alt="profile" style="width: 20px">
                        <?php echo e(auth()->user()->name); ?>

                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/">Home</a></li>
                        <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('students.index')); ?>">Data Siswa</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <form action="/logout" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </ul>
                </li>
            <?php else: ?>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-info" type="submit">Search</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</nav>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center shadow">
    <div class="d-flex align-items-center justify-content-between">
        <a href="/dashboard" class="logo d-flex align-items-center">
            <img src="img/logo.png" alt="logo">
            <span class="d-none d-lg-block text-primary">English Area of Latee</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<?php /**PATH D:\Laravel\eal\resources\views/components/arsip/navbar.blade.php ENDPATH**/ ?>