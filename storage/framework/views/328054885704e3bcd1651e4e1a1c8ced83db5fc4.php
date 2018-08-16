<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <!-- <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div> -->

                    <div class="container">
                        <br />
                        <?php if(\Session::has('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e(\Session::get('success')); ?></p>
                        </div><br />
                        <?php endif; ?>
                        <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Is employee</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td align="left"><?php echo e($employee['name']); ?></td>
                            <td align="left"><?php echo e($employee['email']); ?></td>
                            <td align="left"><?php echo e($employee['address']); ?></td>
                            <td align="left"><?php echo e($employee['is_employee']); ?></td>
                            <td align="left">
                                <a href="<?php echo e(action('EmployeeController@edit', $employee['id'])); ?>" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(action('EmployeeController@destroy', $employee['id'])); ?>" method="post">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>