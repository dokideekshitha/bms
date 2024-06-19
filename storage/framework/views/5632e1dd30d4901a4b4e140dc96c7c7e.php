
<?php $__env->startSection('title','Login'); ?>
<?php $__env->startSection('style'); ?>
<style>
 .navbar-brand img {
  width: 60px;
}
.navbar-nav {
  align-items: center;
}
.navbar .navbar-nav .nav-link {
  
  font-size: 1.1em;
  padding: 0.5em 1em;
}
@media screen and (min-width: 768px) {
  .navbar-brand img {
    width: 80px;
  }
  .navbar-brand {
    margin-right: 0;
    padding: 0 1em;
  }
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar1">
                    <div class="navbar-nav mx-auto text-black">
                        
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="<?php echo e(url('page/team')); ?> "class ="nav-item nav-link text-black">Team</a>
                         <a href="#" class="navbar-brand d-none d-md-block">
                            <img src="<?php echo e(asset('assets/images/logo.png')); ?>"  alt="Brand Logo">
                        </a>
                        <a href ="<?php echo e(url('page/about-us')); ?>" class="nav-link text-black">About Us</a>
                        <a href ="<?php echo e(url('page/contact-us')); ?>" class="nav-link text-black">contact Us</a>
                         <?php if(isset($pages) && $pages->isNotEmpty()): ?>
                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(url('page/' . $page->slug)); ?>" class="nav-item nav-link text-black"><?php echo e($page->name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="m-5">
        <?php echo isset($data->html)?$data->html : 'Page Not Found'; ?>

    </main>
    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container m-5">
                        <img src="assets/logo.png" height="30px" class="bg-white">
                        <div>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nulla maxime, at culpa ipsa aliquam exercitationem deserunt odit incidunt a neque voluptas suscipit maiores quae dolor dolore tenetur corrupti dolorem!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container m-5">
                        <p class="text-white fs-5">Quick Links</p>
                        <ul class="remove-bullets remove-text-decoration">
                            <li><a  href="#" class="remove-text-decoration text-white">About Us</a></li>
                            <li><a href="#" class="remove-text-decoration text-white">Contact Us</a></li>C
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-white text-center">
                    <p>All rights reserved &copy 2022, <a href="1stop.ai">1Stop.ai</a></p>
                </div>
            </div>
        </div>
    </footer>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('customjs'); ?>
<script>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.baseview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bookingms\bookingms\resources\views/dynamic.blade.php ENDPATH**/ ?>