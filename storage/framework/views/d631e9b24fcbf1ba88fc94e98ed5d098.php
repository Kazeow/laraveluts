
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Edit Keluhan</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('keluhan.update', $keluhan->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label>Keluhan</label>
                        <input type="text" name="keluhan" class="form-control" value="<?php echo e($keluhan->keluhan); ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Biaya</label>
                        <textarea name="biaya" class="form-control" required><?php echo e($keluhan->biaya); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ambar\resources\views/keluhan/edit.blade.php ENDPATH**/ ?>