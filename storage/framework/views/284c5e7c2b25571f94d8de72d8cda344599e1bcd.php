<?php $__env->startSection('name'); ?>
<title>Subir Historia</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
<link href="<?php echo e(asset('css/newOfferStyle.scss')); ?>" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="<?php echo e(asset('vendors/ckeditor/ckeditor.js')); ?>"></script>
<?php $__env->stopSection(); ?>    



<?php $__env->startSection('content'); ?>
    <section>
        <div class="container mt-5 mb-5">
            <h1>Nuevo Descuento</h1>
            <div class="d-flex flex row g-0">
                <div class="col-md-6 mt-3">
                    <form method="POST" action="<?php echo e(asset('administracion/Discounts')); ?>" >
                        <?php echo csrf_field(); ?>
                        <div class="card card1 p-3">
                            <p>El decuento sera aplicado a todos los libros que pertenezcan a la categoria que elijas:</p>
                            <label  class="">Categoria:</label>
                            <div class="form-group row" style="padding-left: 15%">
                                <div class="col-auto">
                                    <select class="form-control" id="exampleFormControlSelect1" name="category" style="width: 10rem; padding-left: 10%">        
                                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option  title="<?php echo e($categoria->detail); ?>" value="<?php echo e($categoria->id); ?> "><?php echo e($categoria->type); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="">PORCENTAJE: </span>
                                </div>
                                <input name="porcentaje" type="number" class="form-control" value="1" min="1" max="100" required>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-6">Fecha de Inicio</label>
                                <div class="col-sm-10">
                                    <input id="colFormLabel" type="date" name="fechaInicio" id="fechaFin" class="form-control" style="100%" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-6">Fecha Final</label>
                                <div class="col-sm-10">
                                    <input id="colFormLabel" type="date" name="fechaFinal" id="fechaFin" class="form-control" style="100%" >
                                </div>
                            </div>

                            <button type="submmit" class="btn btn-info">Aplicar Descuento</button>

                        </div>
                    </form>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="card card2 p-3">
                        <div class="image"> <img src="<?php echo e(asset('imagenes/LogoMovi.png')); ?>" width="100%"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/MOVI-Proyecto/resources/views/admin/Discounts/create.blade.php ENDPATH**/ ?>