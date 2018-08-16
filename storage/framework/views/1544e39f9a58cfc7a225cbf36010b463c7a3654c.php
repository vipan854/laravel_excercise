 
 <?php $__env->startSection('content'); ?>
  
 <div class="container">
      <h2>Edit Employee</h2><br  />
        <form method="post" action="<?php echo e(action('EmployeeController@update', $id)); ?>">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo e($employee->name); ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="<?php echo e($employee->email); ?>">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" value="<?php echo e($employee->address); ?>">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>