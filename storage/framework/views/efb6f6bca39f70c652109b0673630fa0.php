<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>English Area of Latee | <?php echo e($title); ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <?php echo $__env->make('components.arsip.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        
        <ul class="sidebar-nav" id="sidebar-nav">
            <?php echo $__env->make('components.arsip.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <a class="breadcrumb-item <?php echo e(Request::is('/') ? 'active' : ''); ?>" href="/">Home</a>
                    <a class="breadcrumb-item <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>" href="/dashboard">Dashboard</a>
                    <?php if(Request::is('speaking')||Request::is('listening')||Request::is('reading')||Request::is('translation')): ?>
                        <a class="breadcrumb-item active" href=""><?php echo e($title); ?></a>
                    <?php endif; ?>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="bg-white rounded shadow p-3 mb-3 d-flex align-items-center">
            <img src="svg/dashboard.svg" alt="dashboard" width="90px">
            <div>
                <h4 class="text-primary fw-bold fz-12">Welcome to!</h6>
                <h6>Sistem Informasi Arsip English Area of Latee</h6>
            </div>
        </div>

        <?php echo $__env->yieldContent('main'); ?>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>English Area of Latee</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Created by <a href="https://github.com/Lonjher">EAL Devoloper</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
<?php /**PATH D:\Walid\eal-project\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>