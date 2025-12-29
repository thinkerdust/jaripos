

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
                                                       <a href="<?php echo e(route('root')); ?>" class="logo-dark">
                                                             <img src="/images/logo-dark.png" height="30" alt="logo dark">
                                                       </a>

                                                       <a href="<?php echo e(route('root')); ?>" class="logo-light">
                                                             <img src="/images/logo-white.png" height="30" alt="logo light">
                                                       </a>
                                                </div>
                                                <div class="text-center">
                                                       <h3 class="fw-bold text-dark fs-20">Reset Password</h3>
                                                       <p class="text-muted mt-1 mb-4">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                                                </div>
                                                <div class="p-3">
                                                       <form action="<?php echo e(route('root')); ?>" class="authentication-form">
                                                             <div class="mb-3">
                                                                   <label class="form-label" for="example-email">Email</label>
                                                                   <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Enter your email">
                                                             </div>
                                                             <div class="mb-1 text-center d-grid">
                                                                   <button class="btn btn-primary" type="submit">Reset Password</button>
                                                             </div>
                                                       </form>
                                                       <p class="mt-3 fw-semibold no-span">Or Sign In with</p>

                                                       <div class="row align-items-center justify-content-center g-3 text-center">
                                                             <div class="col-lg-3">
                                                                   <a href="javascript:void(0);" class="btn btn-outline-danger shadow w-100 d-flex align-items-center justify-content-center gap-1 fw-medium"><i class='bx bxl-google fs-20'></i> Google</a>
                                                             </div>
                                                             <div class="col-lg-3">
                                                                   <a href="javascript:void(0);" class="btn btn-outline-primary shadow w-100 d-flex align-items-center justify-content-center gap-1 fw-medium"><i class='bx bxl-facebook fs-20'></i>Facebook</a>
                                                             </div>
                                                             <div class="col-lg-3">
                                                                   <a href="javascript:void(0);" class="btn btn-outline-dark shadow w-100 d-flex align-items-center justify-content-center gap-1 fw-medium"><i class='bx bxl-github fs-20'></i>Github</a>
                                                             </div>
                                                       </div>
                                                </div>

                                                <p class="text-muted text-center mt-4 mb-0">Back to <a href="<?php echo e(route ('second' , ['auth','signin'])); ?>" class="text-reset fw-bold ms-1">Sign In</a></p>
                                          </div> <!-- end col -->
                                    </div> <!-- end card-body -->
                              </div> <!-- end card -->
                       </div> <!-- end col -->
                 </div> <!-- end row -->
           </div>
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', ['title' => 'Reset Password'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/resources/views/auth/password.blade.php ENDPATH**/ ?>