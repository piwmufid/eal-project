<?php $__env->startSection('hero'); ?>
				<?php echo $__env->make('components.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
				<!-- Kelas Start -->
        <?php echo $__env->make("components.kelas", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Kelas End -->

        <!-- About Start -->
        <?php echo $__env->make("components.about", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- About End -->

        <!-- Menu Start -->
        <?php echo $__env->make("components.menu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Menu End -->

        <!-- Team Start -->
        <?php echo $__env->make('components.heroes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <?php echo $__env->make('components.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Testimonial End -->

        <!-- Comments Start -->
        <?php echo $__env->make('components.comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Comments End -->
        
        <!-- Back to Top -->
        <a href="#" class="btn rounded-circle btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i>
        </a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/A0E9-100C/Android/data/com.termux/files/laravel-project/eal/resources/views/home.blade.php ENDPATH**/ ?>