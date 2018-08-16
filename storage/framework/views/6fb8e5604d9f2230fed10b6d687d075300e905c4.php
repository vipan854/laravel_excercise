<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>User List</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <!-- <?php $__currentLoopData = $userList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><a href="user/<?php echo e($user->userId); ?>"><?php echo e($user->firstName); ?></a></td>
        <td><?php echo e($user->firstName); ?></td>
        <td><?php echo e($user->email); ?></td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
    <tr>
        <td><a href="user/"><?php echo e($user->firstName); ?></a></td>
        <td><?php echo e($user->firstName); ?></td>
        <td><?php echo e($user->email); ?></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
