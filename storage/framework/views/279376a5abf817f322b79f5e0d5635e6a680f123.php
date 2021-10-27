<?php $__env->startSection('name'); ?>
<title>Inicio Sesion</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('estilos'); ?>
<link href="<?php echo e(asset('css/inicioSesionStyle.scss')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>   



<?php $__env->startSection('content'); ?>
<div style="background-color: #333; border-block-color:#333 ">
    <div id="divP" style=" text-align: center;">
        <div class="main-container" style="background-image: url('<?php echo e(asset('imagenes/fondo6.jpg')); ?>');">
            
            <form method="POST" action="<?php echo e(route('login')); ?>" class="formDiv" style="padding-left: 4rem;padding-right: 4rem;">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <h1 style="text-align: center;">Iniciar Sesion</h1>
                </div>

                <div class="form-group">
                    <label for="email" class=""><?php echo e(__('Correo de usuario')); ?></label>
                        <div class="">
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" required aria-describedby="emailHelp"autofocus>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                </div>

                <div class="form-group">
                    <label for="password" class=""><?php echo e(__('Contraseña')); ?></label>
                    <div class="">
                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="remember">
                                <?php echo e(__('Recordarme')); ?>

                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group  ">
                    <div class="col-md-8 " >
                        <button type="submit" class="btn btn-primary" style="margin-left: 10rem">
                            <?php echo e(__('Login')); ?>

                        </button>

                        <?php if(Route::has('password.request')): ?>
                            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>" style="margin-left: 6rem">
                                <?php echo e(__('Forgot Your Password?')); ?>

                            </a>
                        <?php endif; ?>
                    </div>
                </div>             
            </form>     
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/MOVI-Proyecto/resources/views/auth/login.blade.php ENDPATH**/ ?>