


<?php $__env->startSection('main'); ?>
<!-- Recent Sales -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">

        <div class="card-body">
            <h5 class="card-title">Speaking Class <span>| Recent</span></h5>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                <div class="container d-flex justify-content-end">
                    <a class="btn btn-primary"><i class="bi bi-plus-circle mx-1"></i> Add Book</a>
                </div>                
            <?php endif; ?>

            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Class</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><a href="#">1</a></th>
                            <td><?php echo e($kelas->nama_kelas); ?></td>
                            <td><a href="#" class="text-primary"><?php echo e($book->nama_buku); ?></a>
                            </td>
                            <td><?php echo e($book->harga); ?></td>
                            <td><a href="<?php echo e($book->src); ?>" download="<?php echo e($book->nama_buku); ?>" target="_blank" class="shadow rounded btn btn-download">Download</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        </div>

    </div>
</div><!-- End Recent Sales -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Walid\eal-project\resources\views/components/arsip/speaking.blade.php ENDPATH**/ ?>