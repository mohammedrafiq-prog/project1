
<?php $__env->startSection('contact'); ?>
<h1>masseges</h1>
<?php if(count($masseges)>0): ?>
    <?php $__currentLoopData = $masseges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="well">
        <ul class="list-group">
            Name:<li class="list-group-item"><?php echo e($item->name); ?></li>
            Email:<li class="list-group-item"><?php echo e($item->email); ?></li>
            Artical:<li class="list-group-item"><?php echo e($item->artical); ?></li>
            Createdat:<li class="list-group-item"><?php echo e($item->created_at); ?></li>
        </ul></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project3\project\resources\views/inc/massege.blade.php ENDPATH**/ ?>