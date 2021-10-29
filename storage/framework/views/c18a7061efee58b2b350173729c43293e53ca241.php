<?php $__env->startSection('name'); ?>
    <title>Nuevo Pago</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
    <link href="<?php echo e(asset('css/Pago/pagoStyle.scss')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php $__env->stopSection(); ?>    


   
<?php $__env->startSection('content'); ?>

<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">Metodo de Pago</h1>
            <h1 class="display-6">Total a Pagar <?php echo e($totalDQ); ?></h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Tarjeta de Credito </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-maxcdn mr-2"></i> Movis </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Comprar Movis </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()">
                                <input name="tipo"  value="movis" hidden/>
                                <div class="form-group"> <label for="username">
                                        <h6>Propietario Tarjeta</h6>
                                    </label> <input type="text" name="username" placeholder="Nombre del propietario" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Numero Tarjeta</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <label>
                                                <span class="hidden-xs">
                                                    <h6>Fecha de Expiracion</h6>
                                                </span>
                                            </label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> 
                                                <input type="number" placeholder="YY" name="" class="form-control" required> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="number" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirmar Pago</button>
                            </form>
                        </div>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <form>
                            <h4 class="pb-2" style="background-color: rgb(200, 251, 255);">Movis Disponibles: <?php echo e($movisUser); ?></h4>
                            <h4 class="pb-2">   Total a Pagar:       <?php echo e($totalMovis); ?> movis</h4>
                            <h4 class="pb-2">   -20% de descuento* = <?php echo e($totalModisDesc); ?> movis</h4>
                            <p class="text-muted">*cada compra que realices con movis tiene un 20% de descuento </p>
                            <input name="tipo"  value="movis" hidden/>
                            <?php if($movisUser>=$totalModisDesc): ?>
                                <p> <button type="submmit" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Confirmar</button> </p>
                                <p class="text-muted"> Nota: Al hacer click en confirmar pago se estara haciendo efectivo el pago del producto descontandolo de tus movis disponibles. </p>

                            <?php else: ?>
                            <div class="alert alert-danger" role="alert">
                                No tienes suficientes movis para completar la compra
                                <button type="button"  class="btn btn-info"  href="/MOVI-Proyecto/public/home" >COMPRA MOVIS</button>
                                <p class="text-muted" > Si despues de hacer tu compra no aumentan tus movis recarga la pagina </p>

                            </div>
                            <?php endif; ?>
                        </form>    
                    </div> <!-- End -->
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <h1>Comprar Movis</h1>
                        <atarget="_blank"><span class="fab fa-question-circle"></span></a>
                        <button type="button"  class="btn btn-info"  href="/MOVI-Proyecto/public/home" >COMPRA MOVIS</button>
                        <p class="text-muted"> Si despues de hacer tu compra no aumentan tus movis recarga la pagina </p>

                     </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>   

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/Libreria/libros.js')); ?>"></script>
    <script srt="<?php echo e(asset('js/Pago/pago.js')); ?>"
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('admin.template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/MOVI-Proyecto/resources/views/Payment/create.blade.php ENDPATH**/ ?>