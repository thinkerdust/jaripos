

<?php $__env->startSection('body_attribute'); ?>
     class="authentication-bg"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-5">
				<div class="card auth-card">
					<div class="card-body px-3 py-5">
						<div class="mx-auto mb-5 auth-logo text-center">
							<a href="<?php echo e(route('dashboard')); ?>" class="logo-dark">
									<img src="/images/logo-dark.png" height="30" alt="logo dark">
							</a>

							<a href="<?php echo e(route('dashboard')); ?>" class="logo-light">
									<img src="/images/logo-white.png" height="30" alt="logo light">
							</a>
						</div>

						<h2 class="fw-bold text-center fs-18">Hi ! <?php echo e(auth()->user()->name); ?></h2>
						<p class="text-muted text-center mt-1 mb-4">Enter your password to access the admin.</p>

						<div class="px-4">
							<form action="<?php echo e(route('unlock-screen')); ?>" method="POST" class="authentication-form">
								<?php echo csrf_field(); ?>
								<?php if($errors->any()): ?>
									<div class="alert alert-danger alert-dismissible fade show text-center mb-3" role="alert">
										<?php echo e($errors->first()); ?>

										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>
								<?php endif; ?>
								<div class="mb-3">
									<label class="form-label visually-hidden" for="password">Password</label>
									<input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
								</div>
								<div class="mb-1 text-center d-grid">
									<button class="btn btn-primary" type="submit">Sign In</button>
								</div>
							</form>
						</div> <!-- end col -->
					</div> <!-- end card-body -->
				</div> <!-- end card -->
				<p class="mb-0 text-center">Not you? return <a href="<?php echo e(route('register')); ?>" class="text-reset fw-bold ms-1">Sign Up</a></p>
			</div> <!-- end col -->
		</div> <!-- end row -->
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', ['title' => 'Lock Screen'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/resources/views/auth/lock-screen.blade.php ENDPATH**/ ?>