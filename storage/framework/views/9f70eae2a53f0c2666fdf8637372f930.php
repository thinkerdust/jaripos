<!DOCTYPE html>
<html lang="en" <?php echo $__env->yieldContent('html_attribute'); ?>>

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

<body <?php echo $__env->yieldContent('body_attribute'); ?>>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

    <?php echo $__env->yieldContent('scripts'); ?>

</body>

</html><?php /**PATH D:\PROJECT\pos\resources\views/layouts/base.blade.php ENDPATH**/ ?>