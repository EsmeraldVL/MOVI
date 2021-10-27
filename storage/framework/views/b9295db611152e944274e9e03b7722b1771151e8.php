<?php $__env->startSection('name'); ?>
<title>Editar Perfil</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
<link href="<?php echo e(asset('css/perfil.scss')); ?>" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php $__env->stopSection(); ?>    



<?php $__env->startSection('content'); ?>

<div class="container emp-profile">
 <form method="post">
                <div class="row" >

                  <!------IMAGEN ---------->

                    <div class="col-md-4" style="background-color: rgba(80, 80, 80, 0.3);;">
                        <div class="profile-img">
                                <img src="<?php echo e(asset('movi/imagesUser/'.$user->profile_image)); ?>" id='foto' style="padding-top: 1rem;"/>
                            
                            <div class="file btn btn-lg btn-primary">
                                Change Photoimage
                                <input type="file" name="profile_image"/>
                            </div>
                        </div>
                    </div>
                    
                    <!------TITULO ---------->
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo e($user->name." ".$user->surname); ?>

                                    </h5>
                                    <h6>
                                        <?php if($user->isAdmin): ?>
                                            Administrador
                                        <?php else: ?>
                                            Usuario
                                        <?php endif; ?>
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                                    <div class="" style="width: 8rem; text-align: right;">
                                      <input type="button" onclick='editarD()' class="btn btn-info" id="editar" value="Editar Perfil" />
                                      <input onclick='ocultar()' type="submit" class="btn btn-info" id="guardar" value="Guardar Perfil" style="display: none;"/>
                                    </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                      <!------izquierdo ---------->
                      <div class="col-md-4" style="background-color: rgba(0, 53, 114, 0.3);;">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                        
                    </div>


                    <!------informacion ---------->
                    <div class="col-md-8 profile-head" style="padding-top: 0.5rem">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab"  
                              role="tab" aria-controls="home" aria-selected="true">Perfil</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Descripcion</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#seguridad" role="tab" aria-controls="profile" aria-selected="false">Seguridad</a>
                        </li>
                      </ul>
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nombres</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>
                                                    <input name="name" id="nombresID" type="text" class="sinbordefondo" value="<?php echo e($user->name); ?>" disabled>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Apellidos</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>
                                                    <input name="surname" id="apellidosID" type="text" class="sinbordefondo" value="<?php echo e($user->surname); ?>" disabled>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>
                                                    <input    type="text" class="sinbordefondo" style="width: 80%;" value="<?php echo e($email); ?>" disabled>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>País</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>
                                                    <input name="pais" id="paisID" type="text" class="sinbordefondo" value="Guatemala" disabled>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Fecha Nacimiento</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>
                                                    <input id="fechaNID" type="text" class="sinbordefondo" value="20/12/1997" disabled>
                                                </p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        <div class="tab-pane fade" id="seguridad" role="tabpanel" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Cambiar Contraseña</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Expert</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nueva Contraseña</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <input id="fechaNID" type="text" class="sinbordefondo"  placeholder="nueva" required>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Antigua Contraseña</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <input id="fechaNID" type="text"   placeholder="antigua" required>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </form> 
                    
        </div>

        
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/perfil.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/MOVI-Proyecto/resources/views/admin/users/show.blade.php ENDPATH**/ ?>