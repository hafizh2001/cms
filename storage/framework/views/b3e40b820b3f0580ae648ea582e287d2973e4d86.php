<?php $__env->startSection('content'); ?>
<div class="col-md-8">

<h1 class="my-4">Sinopsis
</h1>

<!-- Blog Post -->
<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card mb-4">
   
  <img class="card-img-top" src="<?php echo e(URL::asset($a->image)); ?>" alt="">
  <div class="card-body">
    <h2 class="card-title"><?php echo e($a->title); ?></h2>
    <p class="card-text"><?php echo e($a->content); ?></p>
    
  </div>
  <div class="card-footer text-muted">
    <?php echo e($a->created_at); ?>

    <a href="#">Start Bootstrap</a>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cms\resources\views/articles.blade.php ENDPATH**/ ?>