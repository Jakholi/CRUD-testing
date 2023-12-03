<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Mahasiswa</title>
    <?php echo $__env->make('layouts.bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
    <div class="container">
        <div class="pt-3 d-flex justify-content-between">
            <h2 class="h2 mr-auto"> Biodata <?php echo e($mahasiswa->nama); ?></h2>
            <div class="d-flex justify-content-end align-items-center">
                <a href="<?php echo e(route('mahasiswas.update', ['id'=>$mahasiswa->id])); ?>" class="btn btn-primary mx-3">Update</a>
                <form action="<?php echo e(route('mahasiswas.delete', ['id'=>$mahasiswa->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="container">
            <ul>
                <li>NIM : <?php echo e($mahasiswa->nim); ?></li>
                <li>Nama : <?php echo e($mahasiswa->nama); ?></li>
                <li>Jenis Kelamin : <?php echo e($mahasiswa->jenis_kelamin=='P' ? 'Perempuan' : 'Laki-laki'); ?></li>
                <li>Jurusan : <?php echo e($mahasiswa->jurusan); ?></li>
                <li>Alamat : <?php echo e($mahasiswa->alamat=="" ? "N/A" : $mahasiswa->alamat); ?></li>
            </ul>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Web_latihan\CRD\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>