<?php $__env->startSection('name'); ?>
<title>Subir Libro</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
<link href="<?php echo e(asset('css/subirLibroStyle.scss')); ?>" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<?php $__env->stopSection(); ?>    



<?php $__env->startSection('content'); ?>
<div class="container d-flex justify-content-center " style="padding-bottom: 5rem; padding-top: 5rem;">
    <form method="POST" action="<?php echo e(asset('library/Libros')); ?>" enctype="multipart/form-data" > 
        <?php echo csrf_field(); ?>
        <div class=" row" style="align-self: center; width: 100%;margin-right: 0px;" >
        
            <!--left-column-->
            <div class="col-md-4"  >
                <!--image <img src="https://i.imgur.com/cEmbD0i.jpg"> </div>-->
                
                <div class="profile-img">
                    <img id='foto' src="<?php echo e(asset('imagenes/template.png')); ?>" alt="" style="padding-top: 1rem;"/>
                    <div class="file btn btn-lg btn-primary">
                        subir Foto
                        <input type="file" name="image" id="file11" accept="image/png, .jpeg, .jpg, image/gif"/>
                    </div>
                    <a  class="u-border-5 u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-none u-radius-50 u-text-palette-4-base u-btn-2"><span class="u-icon u-text-white u-icon-1"></a>
                </div>
                <div class="custom-file" style="margin-top: 10%">
                    <input type="file" class="custom-file-input" id="documento" name="PDF" style="color: rgb(0, 9, 139)" required>
                    <label class="custom-file-label" for="customFile" accept="application/pdf" >Subir Pdf</label>
                </div>
            </div>
            <!--right-column-->
            <div class="col-md-8">
                <div class="bb-login">
                    <div class="bb-form validate-form" style="display: inline-block;">   
                                <span class="bb-form-title p-b-26"> Nuevo: </span> <span class="bb-form-title p-b-48"> <i class="mdi mdi-symfony"></i> </span>
                                <div class="wrap-input100" > 
                                    <input class="input100" type="text" name="bookName" placeholder="Nombre Libro"></span> 
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Enter password"> 
                                    <input class="input100" type="text" name="author" placeholder="Escritor">
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Enter password"> 
                                    <input class="input100" type="text" name="editorial" placeholder="Editorial">
                                </div>
                                <div class="wrap-input100 validate-input"> 
                                    <input class="input100" type="number" name="price" placeholder="Precio">
                                </div>
                                <div class="wrap-input100 validate-input"> 
                                    <textarea placeholder="synopsis" rows="4" cols="50" id="message-3b9a" name="synopsis" class="input100" required=""></textarea>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Publicacion</label>
                                    <div class="col-sm-10">
                                        <input id="colFormLabel" type="date" name="publication_date" id="fechaFin" class="form-control" style="100%" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Categoria</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="exampleFormControlSelect1" name="category">        
                                        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option  title="<?php echo e($categoria->detail); ?>" value="<?php echo e($categoria->id); ?> "><?php echo e($categoria->type); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="login-container-form-btn">
                                    <div class="bb-login-form-btn">
                                        <div class="bb-form-bgbtn"></div> <button type="s" class="bb-form-btn"> Publicar Libro </button>
                                    </div>
                                </div>
                    </div>    
                </div>
            </div>
        </div>
    </form>

    
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(asset('js/subirLibro.js')); ?>"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/MOVI-Proyecto/resources/views/Library/NuevoLibro.blade.php ENDPATH**/ ?>