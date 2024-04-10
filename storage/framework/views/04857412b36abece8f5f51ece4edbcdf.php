<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            <?php echo e(__('Avatar Picture')); ?>

        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            <?php echo e(__("Update your avatar profile")); ?>

        </p>
    </header>

    <form action="<?php echo e(route('avatar.update')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="w-80 bg-neutral-100 rounded-full">
        <img src="img/profil.jpg" alt="Avatar Profile" width="50%" class="rounded-full">
    </div>
    </form>
</section><?php /**PATH D:\Walid\eal-project\resources\views/profile/partials/avatar.blade.php ENDPATH**/ ?>