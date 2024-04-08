<li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>" href="/dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
    </a>
</li><!-- End Dashboard Nav -->

<li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('home') ? 'active' : ''); ?>" href="/">
        <i class="bi bi-house-door"></i>
        <span>Home</span>
    </a>
</li><!-- End Dashboard Nav -->



<li class="nav-heading py-2 text-secondary">ARCHIVE</li>

<li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('speaking') ? 'active' : ''); ?>" href="/speaking">
        <i class="bi bi-person"></i>
        <span>Speaking</span>
    </a>
</li><!-- End Speaking Page Nav -->

<li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('listening') ? 'active' : ''); ?>" href="/listening">
        <i class="bi bi-headphones"></i>
        <span>Listening</span>
    </a>
</li><!-- End Listening Page Nav -->

<li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('reading') ? 'active' : ''); ?>" href="/reading">
        <i class="bi bi-book"></i>
        <span>Reading</span>
    </a>
</li><!-- End Reading Page Nav -->

<li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('translation') ? 'active' : ''); ?>" href="/translation">
        <i class="bi bi-translate"></i>
        <span>Translation</span>
    </a>
</li><!-- End Translation Page Nav -->






<li class="nav-heading py-2 text-secondary">MASTER</li>

<?php if(Route::has('login') && Route::has('logout')): ?>
    <?php if(auth()->guard()->check()): ?>
    <li class="nav-item">
            <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button class="nav-link button <?php echo e(Request::is('login') ? 'active' : ''); ?>">
                <i class="bi bi-box-arrow-in-right"></i>Logout</button>
        </li>
        </form>
    <?php else: ?>
        <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('login') ? 'active' : ''); ?>" href="<?php echo e(route('login')); ?>">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li>
    <?php endif; ?>
<?php endif; ?>



<?php /**PATH E:\PRODUCTIVE\MY PROJECT\LARAVEL\eal-project\resources\views/components/arsip/sidebar.blade.php ENDPATH**/ ?>