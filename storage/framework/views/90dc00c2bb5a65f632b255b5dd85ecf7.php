<!DOCTYPE html>
<html <?php echo $__env->yieldContent('html-attribute'); ?>>

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title><?php echo e($title); ?> | Metor - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="A fully responsive premium Bootstrap admin dashboard template for modern web applications." />
    <meta name="author" content="FoxPixel" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="/images/favicon.ico">

    <?php echo $__env->yieldContent('css'); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/scss/app.scss', 'resources/scss/icons.scss']); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/config.js', 'resources/js/layout.js']); ?>
</head>

<body>
    <!-- START Wrapper -->
    <div class="wrapper">

        <?php echo $__env->make('layouts.partials.main-nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('layouts.partials.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- Start Content here -->
        <div class="page-container">

            <!-- Start Container Fluid -->
            <div class="page-content">

                <?php echo $__env->yieldContent('content'); ?>

            </div>
            <!-- End Container Fluid -->

            <?php echo $__env->make('layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        </div>
        <!-- End Page Content -->

    </div>
    <!-- END Wrapper -->

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

    <?php echo $__env->yieldContent('scripts'); ?>

</body>

</html><?php /**PATH /var/www/resources/views/layouts/vertical.blade.php ENDPATH**/ ?>