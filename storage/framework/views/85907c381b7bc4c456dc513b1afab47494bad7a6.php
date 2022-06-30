
<?php $__env->startSection('content'); ?>
<form class="row g-3" action="<?php echo e(route('add.name')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="col-auto">
      Imie <br>
      <input type="text" name="imie"class="form-control-plaintext">
    </div>
    <div class="col-auto">
      Nazwisko <br>
      <input type="text" name="nazwisko"class="form-control-plaintext">
    </div>
    <div class="col-auto">
      Pesel<br>
      <input type="number" name="pesel" class="form-control-plaintext">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">dodaj dane</button>
    </div>
  </form>

 <br>
 
 <table class="table">
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Imię</th>
        <th scope='col'>Nazwisko</th>
        <th scope='col'>Nr Pesel</th>
        <th></th>
        <th></th>
        
    </tr
 <?php ($i=1); ?>
     <?php $__currentLoopData = $tab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<tr>
    <td scope='row'><?php echo e($i++); ?></td>
    <td scope='row'><?php echo e($index->imie); ?></td>
    <td scope='row'><?php echo e($index->nazwisko); ?></td>
    <td scope='row'><?php echo e($index->nr_pesel); ?></td>
    <td scope='row'> <a href="<?php echo e(url('usun/'.$index->id)); ?>"> usun</a></td>
    <td scope='row'> <a href="<?php echo e(url('edit/'.$index->id)); ?>"> edit</a></td>
</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </table>

<hr>
<br>

<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\LaravelProj\Projekt\resources\views/home.blade.php ENDPATH**/ ?>