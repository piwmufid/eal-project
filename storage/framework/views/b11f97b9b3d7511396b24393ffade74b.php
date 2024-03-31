

<?php $__env->startSection('hero'); ?>
				<?php echo $__env->make('components.home.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
				<!-- Kelas Start -->
        <?php echo $__env->make("components.home.kelas", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Kelas End -->

        <!-- About Start -->
        <?php echo $__env->make("components.home.about", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- About End -->

        <!-- Team Start -->
        <?php echo $__env->make('components.home.heroes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Team End -->

        <!-- Testimonial Start -->
        <?php echo $__env->make('components.home.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Testimonial End -->

        <!-- Comments Start -->
        <?php echo $__env->make('components.home.comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Comments End -->
        
        <!-- Back to Top -->
        <a href="#" class="btn rounded-circle btn-primary back-to-top"><i class="bi bi-arrow-up"></i>
        </a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\PRODUCTIVE\MY PROJECT\LARAVEL\eal-project\resources\views/home.blade.php ENDPATH**/ ?>