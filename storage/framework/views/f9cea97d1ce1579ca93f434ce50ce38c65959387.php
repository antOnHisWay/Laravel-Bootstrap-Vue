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
        <!-- End CSS -->
    </head>
    <body class="vertical-layout">
        <!-- Start Infobar Setting Sidebar -->
        <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="/theme/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
            </div>
            <div class="infobar-settings-sidebar-body">
                <div class="custom-mode-setting">
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Payment Reminders</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Stock Updates</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Open for New Products</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third" /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Enable SMS</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Newsletter Subscription</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Show Map</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth" /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">e-Statement</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked /></div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-8"><h6 class="mb-0">Monthly Report</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked /></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="infobar-settings-sidebar-overlay"></div>
        <!-- End Infobar Setting Sidebar -->
        <!-- Start Containerbar -->
        <div id="containerbar">
            <!-- Start Leftbar -->
            <?php echo $__env->make('layouts.leftbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- End Leftbar -->
            <!-- Start Rightbar -->
            <?php echo $__env->make('layouts.rightbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <!-- End Rightbar -->
        </div>
        <!-- End Containerbar -->
        <!-- Start JS -->
        <script src="<?php echo e(asset('theme/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/js/modernizr.min.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/js/detect.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/js/jquery.slimscroll.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/js/vertical-menu.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/plugins/switchery/switchery.min.js')); ?>"></script>
        <?php echo $__env->yieldContent('script'); ?>
        <!-- Core JS -->
        <script src="<?php echo e(asset('theme/js/core.js')); ?>"></script>
        <!-- End JS -->
        <script src="<?php echo e(url('js/app.js')); ?>"></script>
    </body>
</html>    <?php /**PATH /var/www/html/light-vertical/resources/views/layouts/main.blade.php ENDPATH**/ ?>