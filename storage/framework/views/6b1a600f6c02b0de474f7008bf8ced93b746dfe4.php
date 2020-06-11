<?php $__env->startSection('title'); ?>
    Component Aspect
<?php $__env->stopSection(); ?>



<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightbar-content'); ?>
    <!-- Start Contentbar -->
    <div class="contentbar" id="app" style="padding: 20px; margin: 30px;">
        <layout></layout>
    </div>
    <!-- End Contentbar -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/light-vertical/resources/views/demo/index.blade.php ENDPATH**/ ?>