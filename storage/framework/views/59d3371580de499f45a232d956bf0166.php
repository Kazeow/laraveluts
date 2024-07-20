
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Detail Barang</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Barang</th>
                        <td><?php echo e($barang->nama_barang); ?></td>
                    <tr>
                        <th>Jenis Barang</th>
                        <td><?php echo e($barang->jenis_barang); ?></td>
                    </tr>
                </table>
                <a href="<?php echo e(route('barang.index')); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ambar\resources\views/barang/show.blade.php ENDPATH**/ ?>