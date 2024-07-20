
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Edit Barang</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('barang.update', $barang->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" value="<?php echo e($barang->nama_barang); ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Barang</label>
                        <select name="jenis_barang" class="form-control" required>
                            <option value="E" <?php echo e($barang->jenis_barang == 'E' ? 'selected' : ''); ?>>ELEKTRONIK</option>
                            <option value="NE" <?php echo e($barang->jenis_barang == 'NE' ? 'selected' : ''); ?>>NON-ELETRONIK</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ambar\resources\views/barang/edit.blade.php ENDPATH**/ ?>