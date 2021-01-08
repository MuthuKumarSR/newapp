<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!<br>


                    <?php if(isset($posts)): ?>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="row">  
                                <div class="col-md-3">
                                    <?php echo e($post->title); ?>

                                </div>
                                <div class="col-md-3">
                                    <?php echo e($post->description); ?>

                                </div>
                                <div class="col-md-3">
                                    <img src="/images/<?php echo e($post->image); ?>" alt="<?php echo e($post->image); ?>" height="200" width="150">
                                </div>
                                <div class="col-md-3">
                                    <button><a href="/delete/<?php echo e($post->id); ?>">Delete</a></button>
                                </div>
                           </div>
                            
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>