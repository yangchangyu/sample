<?php $__env->startSection('content'); ?>
  <div class="jumbotron">
    <h1>hello wor</h1>
    <p class="lead">
      what you see is<a href="https://fsdhub.com/books/laravel-essential-training-5.1">Laravel 入门教程</a> 的示例项目主页。
    </p>
    <p>
      everythinf begin here!
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="<?php echo e(route('signup')); ?>" role="button">注册</a>
    </p>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>