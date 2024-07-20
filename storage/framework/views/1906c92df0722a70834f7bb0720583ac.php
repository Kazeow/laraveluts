
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Detail Pegawai</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Pegawai</th>
                        <td><?php echo e($pegawai->nama_pegawai); ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?php echo e($pegawai->alamat); ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td><?php echo e($pegawai->jenis_kelamin); ?></td>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <td><?php echo e($pegawai->jabatan); ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?php echo e($pegawai->status); ?></td>
                    </tr>
                </table>
                <a href="<?php echo e(route('pegawai.index')); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ambar\resources\views/pegawai/show.blade.php ENDPATH**/ ?>