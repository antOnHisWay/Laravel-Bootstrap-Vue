<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title> <?php echo $__env->yieldContent('title'); ?> </title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('/theme/images/favicon.ico')); ?>">
    <!-- Start CSS -->
    <?php echo $__env->yieldContent('style'); ?>
    <link href="<?php echo e(asset('theme/plugins/switchery/switchery.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('theme/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('theme/css/icons.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('theme/css/flag-icon.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('theme/css/style.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet" type="text/css">
    <!-- End CSS -->
</head>
<body>

<div id="app">
    <router-view></router-view>
</div>

<script src="<?php echo e(asset('theme/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/modernizr.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/detect.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/jquery.slimscroll.js')); ?>"></script>

<!-- End JS -->
<script src="<?php echo e(url('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH /var/www/html/light-vertical/resources/views/front/index2.blade.php ENDPATH**/ ?>