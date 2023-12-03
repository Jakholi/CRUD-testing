<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data Mahasiswa</title>
    <?php echo $__env->make('layouts.bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
    <div class="container">
        <h2>Update Data <?php echo e($mahasiswa->nama); ?></h2>
        <form action="<?php echo e(route('mahasiswas.saveUpdate', ['id' => $mahasiswa->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id='nim' name="nim" value="<?php echo e($mahasiswa->nim); ?>">
                <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>                            
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id='nama' name="nama" value="<?php echo e($mahasiswa->nama); ?>">
                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>                            
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" <?php echo e($mahasiswa->jenis_kelamin == 'L' ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="laki_laki">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" <?php echo e($mahasiswa->jenis_kelamin == 'P' ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                    <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger">
                            <?php echo e($message); ?>

                        </div>                                
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="jurusan" class="form-control">
                    <option value="Teknik Informatika" <?php echo e($mahasiswa->jurusan == 'Teknik Informatika' ? 'selected':''); ?>>
                        Teknik Informatika
                    </option>
                    <option value="Sistem Informasi" <?php echo e($mahasiswa->jurusan =='Sistem Informasi' ? 'selected':''); ?>>
                        Sistem Informasi
                    </option>
                    <option value="Ilmu Komunikasi" <?php echo e($mahasiswa->jurusan =='Ilmu Komunikasi' ? 'selected':''); ?>>
                        Ilmu Komunikasi
                    </option>
                    <option value="Teknik Sipil" <?php echo e($mahasiswa->jurusan =='Teknik Sipil' ? 'selected':''); ?>>
                        Teknik Sipil
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="form-control">
                    <?php echo e($mahasiswa->alamat); ?>

                </textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Update</button>
        </form>
    </div>
    
</body>
</html><?php /**PATH C:\Web_latihan\CRD\resources\views/mahasiswa/update.blade.php ENDPATH**/ ?>