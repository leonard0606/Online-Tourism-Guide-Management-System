<?php $__env->startSection('content'); ?>
    <div class="container">
        <center><h1>Welcome to Online Tourist Guide Management System</h1></center>
        <?php $__currentLoopData = $attractions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attraction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="mt-5">
                <div class="card">
                    <div class="card-header text-center">
                       <h4>
                        <?php echo e($attraction->name); ?>

                       </h4>
                    </div>
                    <div class="card-body row">
                        <div class="col-md-6 pt-2" style="height:350px">
                            <img src="./uploads/<?php echo e($attraction->images[0]->path); ?>"
                            alt="Attr Img" width="100%" height="100%">
                        </div>
                        <div class="col-md-6 pt-2">
                            <p>
                                <?php echo e($attraction->description); ?>

                            </p>
                            <div class="pt-2">
                                <label>Daily charges per individual : <strong>Ksh :  <?php echo e($attraction->price); ?></strong></label>
                                <label> Found in  <?php echo e($attraction->address->county); ?>

                                    County,
                                     <?php echo e($attraction->address->subcounty); ?> District. <a href="#">See on map</a></label>
                            </div>
                            <div class="text-center">
                                <a href="/bookings/<?php echo e($attraction->id); ?>" type="button" class="btn btn-success">
                                    Book now!!
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/Documents/OTGMS/resources/views/welcome.blade.php ENDPATH**/ ?>