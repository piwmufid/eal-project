<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <img class="image-fluid" src="img/logo.png">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="/home" class="nav-item nav-link active">Home</a>
            <a href="#" class="nav-item nav-link">Blog</a>
            <a href="/dashboard" class="nav-item nav-link">Archive</a></a>
            <a href="#menu" class="nav-item nav-link">Menu</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                <div class="dropdown-menu m-0">
                    <a href="#" class="dropdown-item">Blog</a>
                    <a href="/dashboard" class="dropdown-item">Archive</a>
                </div>
            </div>
        </div>
        <?php if(auth()->guard()->check()): ?>
            <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-sm btn-danger text-capitalize rounded-pill py-2 px-5">Logout</button>
            </form>
        <?php else: ?>    
            <a href="<?php echo e(route('login')); ?>" class="btn btn-sm btn-primary text-capitalize rounded-pill py-2 px-5">Login</a>
        <?php endif; ?>
    </div>
</nav>
<?php /**PATH /home/user/eal-project/resources/views/components/home/navbar.blade.php ENDPATH**/ ?>