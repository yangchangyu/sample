
<?php $__env->startSection('title', '所有用户'); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
  <h1>所有用户</h1>
  <ul class="users">
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php echo $__env->make('users._user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>

  <?php echo $users->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>