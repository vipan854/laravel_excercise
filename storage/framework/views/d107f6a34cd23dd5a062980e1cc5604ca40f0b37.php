 
 <?php $__env->startSection('content'); ?>
  
 Hi User with ID: <?php echo e($userId); ?>

  
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>