
<?php $__env->startSection('content'); ?>
<form class="row g-3" action="<?php echo e(url('update/'.$tabela->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="col-auto">
      Imie <br>
      <input type="text" name="imie"class="form-control-plaintext" value="<?php echo e($tabela->imie); ?>">
    </div>
    <div class="col-auto">
      Nazwisko <br>
      <input type="text" name="nazwisko"class="form-control-plaintext" value="<?php echo e($tabela->nazwisko); ?>">
    </div>
    <div class="col-auto">
      Pesel<br>
      <input type="number" name="pesel" class="form-control-plaintext" value="<?php echo e($tabela->nr_pesel); ?>">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">edytuj dane</button>
    </div>
  </form>

 <br>

<hr>
<br>

<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\LaravelProj\Projekt\resources\views/edit.blade.php ENDPATH**/ ?>