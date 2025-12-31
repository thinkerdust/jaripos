

<?php $__env->startSection('body_attribute'); ?>
    class="authentication-bg"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="card auth-card">
                    <div class="card-body">
                        <div class="p-3">
                            <div class="mx-auto mb-5 auth-logo text-center">
                                <a href="/" class="logo-dark">
                                    <img src="/images/logo-dark.png" height="30" alt="logo dark">
                                </a>

                                <a href="/" class="logo-light">
                                    <img src="/images/logo-white.png" height="30" alt="logo light">
                                </a>
                            </div>
                            <div class="text-center">
                                <h3 class="fw-bold text-dark fs-20">Hi , Sign Up 👋 </h3>
                                <p class="text-muted mt-1 mb-4">New to our platform? Sign up now! It only takes a minute.</p>
                            </div>
                            <div class="p-3">
                                <form action="/register" method="POST" class="authentication-form">
                                    <?php echo csrf_field(); ?>
                                    <?php if($errors->any()): ?>
                                        <div class="alert alert-danger alert-dismissible fade show text-center mb-3" role="alert">
                                            <?php echo e($errors->first()); ?>

                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    <?php endif; ?>
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="name" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" required>
                                            <label class="form-check-label" for="checkbox-signin">I accept Terms and Condition</label>
                                        </div>
                                    </div>

                                    <div class="mb-1 text-center d-grid">
                                        <button class="btn btn-primary" type="submit">Sign Up</button>
                                    </div>
                                </form>
                            </div>

                            <p class="text-muted text-center mt-4 mb-0">I already have an account <a href="/login" class="text-reset fw-bold ms-1">Sign In</a></p>
                        </div> <!-- end col -->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', ['title' => 'Sign Up'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/resources/views/auth/register.blade.php ENDPATH**/ ?>