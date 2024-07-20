
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Tambah Komputer</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-body">
        <form action="<?php echo e(route('komputer.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="merek_komputer">Merek Komputer</label>
            <select class="form-control" id="merek_komputer" name="merek_komputer" required>
                <option value="Asus">Asus</option>
                <option value="Acer">Acer</option>
                <option value="Lenovo">Lenovo</option>
                <option value="Samsung">Samsung</option>
                <option value="Apple">Apple</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jenis_komputer">Jenis Komputer</label>
            <input type="text" class="form-control" id="jenis_komputer" name="jenis_komputer" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ambar\resources\views/komputer/create.blade.php ENDPATH**/ ?>