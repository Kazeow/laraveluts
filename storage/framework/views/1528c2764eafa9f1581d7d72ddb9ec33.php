
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Edit Pegawai</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('pegawai.update', $pegawai->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label>Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control" value="<?php echo e($pegawai->nama_pegawai); ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" required><?php echo e($pegawai->alamat); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="L" <?php echo e($pegawai->jenis_kelamin == 'L' ? 'selected' : ''); ?>>Laki-laki</option>
                            <option value="P" <?php echo e($pegawai->jenis_kelamin == 'P' ? 'selected' : ''); ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select name="jabatan" class="form-control" required>
                            <option value="teknisi" <?php echo e($pegawai->jabatan == 'teknisi' ? 'selected' : ''); ?>>Teknisi</option>
                            <option value="admin" <?php echo e($pegawai->jabatan == 'admin' ? 'selected' : ''); ?>>Admin</option>
                            <option value="spy" <?php echo e($pegawai->jabatan == 'spy' ? 'selected' : ''); ?>>Spy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="aktif" <?php echo e($pegawai->status == 'aktif' ? 'selected' : ''); ?>>Aktif</option>
                            <option value="tidak_aktif" <?php echo e($pegawai->status == 'tidak_aktif' ? 'selected' : ''); ?>>Tidak Aktif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ambar\resources\views/pegawai/edit.blade.php ENDPATH**/ ?>