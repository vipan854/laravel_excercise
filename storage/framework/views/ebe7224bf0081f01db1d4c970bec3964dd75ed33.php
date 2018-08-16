<?php if(Route::has('login')): ?>
                <div class="top-right links" style="    text-align: right;
    font-size: 20px;
    background-color: lightgray;">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="/user-list">User List</a></li>
      <li><a href="<?php echo e(URL::route('list')); ?>">Users</a></li>
      <li><a href="/users">Users</a></li>
    </ul>
  </div>
</nav>