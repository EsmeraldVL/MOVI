<?php $__env->startSection('name'); ?>
<title>Registro</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
<link href="<?php echo e(asset('css/registroStyle.scss')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>    



<?php $__env->startSection('content'); ?>


<section id="inicio" style="background-image: url('imagenes/fondo1.jpeg')">
    <ddiv class="inicio-container" style="text-align: center" >
        <h1 style="color:white; font-size: 5rem;" class="animate__animated animate__backInLeft animate__delay-2s">Registrate</h1>
        <div class="main-container">
            <div class="tab-content" style="padding-bottom: 10%; padding-right: 10%; padding-left: 10%; ">
                <div id="signup" style="  margin:0px auto;  width: 100%">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
                        <div id="login-box">
                            <div class="left">
                                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" placeholder="Nombres *" required autocomplete="name" autofocus>
                                <?php $__errorArgs = ['name'];
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
                                    
                                
                                <input id="apellido" type="text" class="form-control <?php $__errorArgs = ['apellido'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="surname" placeholder="Apellidos *"  required autocomplete="name" autofocus>
                                <?php $__errorArgs = ['apellido'];
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

                                <div style="20rem">    
                                <input id="correo" type="email" style="margin-bottom: 0.5rem" style="width: 100%;" class=" form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" placeholder="E-mail *" required>
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
                                <div class="input-group"  style="width: 200px; padding-top:0.5rem;">
                                    <input type="password" id="password" name="password" placeholder="Password *" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"   required >
                                        <div style="width: 20%; height: 80%;">
                                            <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                                        </div>
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
                                <div class="input-group" style="width: 200px;padding-top:0.5rem;">
                                    <input id="password" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Password *"  required>
                                    <div style="width: 20%; height: 80%;">
                                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                                    </div>
                                </div>

                                
                                <div style="width: 200px;">
                                    Fecha de Nacimiento
                                    <input type="date" name="birth_date" id="fechaFin" class="form-control" style="100%" >
                                </div>
                                <div class="form-check" style="">
                                    <input name="isAdmin" type="checkbox" class="form-check-input" id="exampleCheck1" value="0"checked  hidden>
                                    <label class="form-check-label" for="exampleCheck1">Es Admin</label>
                                </div>
                                <div class="form-check">
                                    <input name="isActive" type="checkbox" class="form-check-input" id="exampleCheck1" hidden>
                                    <label class="form-check-label" for="exampleCheck1">Es Admin</label>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Register')); ?>

                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <span class="loginwith">Descubre nuevas <br />Aventuras
                                <bt /> Con tu imaginacion</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  Error handle -->
    <?php if($errors->any()): ?>
    <div class="row collapse">
        <ul class="alert-box warning radius">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li> <?php echo e($error); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
  <script>
    function mostrarPassword(){
      var cambio = document.getElementById("password");
      if(cambio.type == "password"){
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
      }else{
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
      }
    } 
  </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/MOVI-Proyecto/resources/views/auth/register.blade.php ENDPATH**/ ?>