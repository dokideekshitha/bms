
<?php $__env->startSection('dashContent'); ?>
    <div class="container">
        <a href="<?php echo e(route('booking.add')); ?>" class="btn btn-primary mb-2 float-end">Create New Booking</a>
        <table class="table table-light table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">Booking Name</th>
                <th scope="col">Booked for</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>             
                <?php $i =1; ?>    
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                <tr>
                    <th scope="row"><?php echo e($i); ?></th>
                    <td><?php echo e(@$booking->user_name); ?></td>
                    <td><?php echo e(@$booking->name); ?></td>
                    <td><?php echo e(@$booking->booking_datetime); ?></td>
                    <td><div class="dropdown">
                        <span class="bi bi-list"></span>
                        <div class="dropdown-content">
                            <a href="<?php echo e(route('booking.edit',['id'=>$booking->id])); ?>"><i class="bi bi-pencil-square"></i> Edit</a>                     
                            <a href="<?php echo e(route('booking.view.delete',['id'=>$booking->id])); ?>"><i class="bi bi-trash"></i> Delete</a>
                        </div>
                    </div>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('UserDashboard.Layout.userBaseView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bookingms\bookingms\resources\views/UserDashboard/Bookings/index.blade.php ENDPATH**/ ?>