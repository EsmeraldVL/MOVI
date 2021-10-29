<?php $__env->startSection('name'); ?>
<title><?php echo e($Book->bookName); ?> Page</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
<link href="<?php echo e(asset('css/Libreria/editBookPageStyle.scss')); ?>" rel="stylesheet">
<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<?php $__env->stopSection(); ?>    


   
<?php $__env->startSection('content'); ?>
    <section >
        <div class="container rounded bg-white mt-5">
            <div class="row">
                <div class="col-md-4 border-right" >
                    <div class="d-flex flex-column align-items-center text-center imagenLibro " style="height: 100%;" >
                        <div class="profile-img">
                            <img id='foto'  class="mt-5 " src="<?php echo e(asset('movi/imagesBooks/'.$Book->image)); ?>" width="60%" height="70%">
                            <div class="file btn btn-lg btn-primary">
                                Cambiar Foto
                                <input type="file" name="image" id="file11" accept="image/png, .jpeg, .jpg, image/gif"/>
                            </div>
                        </div>
                        <span class="font-weight-bold"><?php echo e($Book->bookName); ?></span>
                        <span class="text-black-50"><?php echo e($Book->author); ?></span>
                        
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="text-right">Editar Libro</h6>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4"><h5>Nombre del libro:</h5></div>
                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Nombre del Libro" value="<?php echo e($Book->bookName); ?>"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4"><h5>Autor del libro:</h5></div>
                            <div class="col-md-6"><input type="text" class="form-control" value="<?php echo e($Book->author); ?>" placeholder="Autor"></div>
                        </div>
                        <div class="row mt-3 form-group">
                            <label for="exampleFormControlTextarea1">Synopsis</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" > <?php echo e($Book->synopsis); ?></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Categoria</label>
                            <div style="padding-left: 5px;">
                                <select class="form-control" id="exampleFormControlSelect1" name="category" style="width: 10rem">        
                                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option  title="<?php echo e($categoria->detail); ?>" value="<?php echo e($categoria->id); ?> "><?php echo e($categoria->type); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">+</button>
                              </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Fecha Publicacion</label>
                                    <div class="col-sm-10">
                                        <input id="colFormLabel" type="date" name="publication_date" id="fechaFin" class="form-control" style="100%"  value="<?php echo e($Book->publication_date); ?>">
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Precio Q.</label>
                                    <input type="number" class="form-control" name="price" placeholder="Example input" value="<?php echo e($Book->price); ?>">
                                </div>
                        </div>
                        </div>
                        <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
<?php echo $__env->make('admin.template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/MOVI-Proyecto/resources/views/Library/EditarLibro.blade.php ENDPATH**/ ?>