<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Daftar Mata Kuliah</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item active">Daftar Mata Kuliah</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

        <div class="card">
            <div class="card-header text-right">
                <a href="<?php echo e(route('createMatkul')); ?>" class="btn btn-primary" role="button">Add Mata Kuliah</a>
            </div>
            <div class="card-body p-0">
                <table class="table-hover mb-0">
                    <thead>
                    <tr>
                        <th>Kode Mata Kuliah</th>
                        <th>Kode Prodi</th>
                        <th>Mata Kuliah</th>
                        <th>SKS</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $matkuls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matkul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($matkul->kode_matkul); ?></td>
                                <td><?php echo e($matkul->kode_prodi); ?></td>
                                <td><?php echo e($matkul->nama_matkul); ?></td>
                                <td><?php echo e($matkul->sks); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TugasBesar_PWL-main\resources\views/matkul/index.blade.php ENDPATH**/ ?>