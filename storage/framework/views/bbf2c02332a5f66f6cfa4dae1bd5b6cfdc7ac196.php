<!doctype html>
<html>
 
<head>
 
<meta charset="utf-8">
 
 <meta name="description" content="">
  
 <meta name="Saquib" content="Blade">
  
 <title>Checkout our layout</title>
  
 <!-- load bootstrap from a cdn -->
  
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/3.0.3/css/bootstrap-combined.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <style>
 footer {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100px;
    background: #ccc;
    text-align: center;
 }
 .container{
     width:99%;
 }
 #main{
    text-align: center;
 }
 </style>
</head>
 
<body>
 
<div class="container">
 
   <header class="row">
 
       <?php echo $__env->make('common.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
   </header>
 
   <div id="main" class="row">
 
           <?php echo $__env->yieldContent('content'); ?>
 
   </div>
 
   <footer class="row">
 
       <?php echo $__env->make('common.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
   </footer>
 
</div>
 
</body>
 
</html>