<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $__env->yieldContent('title', 'Sample App'); ?> - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <?php echo $__env->make('layouts._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        <?php echo $__env->make('shared._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
    </div>
  </body>
</html>
