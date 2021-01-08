<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Profile</div>

                <div class="panel-body">
                    <div class="col-md-12">
                        Name : <?php echo e(Auth::user()->name); ?>

                    </div>
                    <div class="col-md-12">
                        Email : <?php echo e(Auth::user()->email); ?>

                    </div>
                    <div class="col-md-12">
                        Mobile Number : <?php echo e(Auth::user()->phone); ?>

                    </div>  
                    <div class="col-md-12">
                        Account Open at : <?php echo e(Auth::user()->created_at); ?>

                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>