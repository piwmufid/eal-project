<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center shadow">
    <div class="d-flex align-items-center justify-content-between">
        <a href="/dashboard" class="logo d-flex align-items-center">
            <img src="img/logo.png" alt="logo">
            <span class="d-none d-lg-block text-primary">English Area of Latee <span class="span-text"><br> Pondok Pesantren Annuqayah Latee</span></span>
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
            </li>
        </ul>
    </nav><!-- End Icons Navigation -->

    <div class="mx-5 d-flex justify-content-center align-items-center">
        <?php if(auth()->guard()->check()): ?>
            <div class="rounded-circle mx-2">
                <img src="<?php echo e(auth()->user()->avatar); ?>" alt="avatar" width="40px" class="rounded-circle">
            </div>
            <div class="d-flex flex-column justify-content-center lh-1 ailgn-items-center profil">
                <span class="text-primary"><?php echo e(auth()->user()->nama); ?> <br></span>
                <span class="span-text" style="font-size: 13px"><?php echo e(auth()->user()->roles->nama_role); ?></span>
            </div>
        <?php endif; ?>
    </div>

</header><!-- End Header -->
<?php /**PATH D:\Walid\eal-project\resources\views/components/arsip/navbar.blade.php ENDPATH**/ ?>