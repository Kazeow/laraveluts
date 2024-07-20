
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Detail Keluhan</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Keluhan</th>
                        <td><?php echo e($keluhan->keluhan); ?></td>
                    </tr>
                    <tr>
                        <th>Biaya</th>
                        <td><?php echo e($keluhan->biaya); ?></td>
                    </tr>
                </table>
                <a href="<?php echo e(route('keluhan.index')); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ambar\resources\views/keluhan/show.blade.php ENDPATH**/ ?>