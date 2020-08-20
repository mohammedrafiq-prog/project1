<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
</head>
<body>
   <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="container">
      <?php if(Request::is('/') or Request::is('home')): ?>
        <?php echo $__env->make('layout.homecase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      <div class="row"> 
          <div class="col-md-8 col-lg-8 "> 
            <?php echo $__env->make('inc.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                                    
            <?php echo $__env->yieldContent('contact'); ?>
            </div>
            <div class="col-md-4 col-lg-4">
              <?php echo $__env->make('inc.slidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div> 
            
         
    </div>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\project3\project\resources\views/layout/app.blade.php ENDPATH**/ ?>