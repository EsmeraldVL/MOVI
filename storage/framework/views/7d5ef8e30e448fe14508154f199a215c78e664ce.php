<?php $__env->startSection('name'); ?>
    <title>Libros</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
    <link href="<?php echo e(asset('css/Libreria/librosStyle.scss')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php $__env->stopSection(); ?>    


   
<?php $__env->startSection('content'); ?>
<section >
            <div class="main-container">
                <div class="first-container share">
                    <h1>
                        <span class="span" id="one">M</span>
                        <span class="span" >O</span>
                        <span class="span" >V</span> 
                        <span class="span" >I</span>
                        <span class="span"  id="one"></span>
                        <span class="span"  >L</span>
                        <span class="span" >i</span>
                        <span class="span" >b</span>
                        <span class="span" >r</span>
                        <span class="span"  >o</span>
                        <span class="span" >s</span>
                    </h1>
                </div>
            </div>       
<div id="content" class="site-content" style="padding-top: 0">
    <div id="primary" class="content-area">                   
        <section class="fh5co-books" style="padding-left: 2rem;padding-right: 4px;">
            <div class="site-container" style="padding-bottom: 20px;padding-left: 10%; padding-right: 10%;">
                <div>
                    <h2>Categorias:</h2>
                    <div class="searchBox">
                    <input class="searchInput"type="text" name="" placeholder="Buscar Libro">
                    <button class="searchButton" href="#">
                        <i class="material-icons">
                            search
                        </i>
                    </button>
                    </div>
                    </div>
                    <div class="searchBox2">
                        <select class="searchInput2" id="inlineFormCustomSelectPref" name="category">
                            <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  title="<?php echo e($categoria->detail); ?>" value="<?php echo e($categoria->id); ?> "><?php echo e($categoria->type); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <button class="searchButton" href="#">
                            <i class="material-icons">
                                forward
                            </i>
                        </button>
                    </div>
                </div>
                
                <div class="books" style="padding-top: 8rem; padding-left:5%;padding-right:5%" >
                    <?php $i=0?>
                    <?php if($libros ?? ''): ?>
                    <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i=$i+1?>
                    <div class="single-book">
                        <a href="<?php echo e(asset('library/Libros/'.$libro->id)); ?>" class="single-book__img">
                            <img src="<?php echo e(asset('movi/imagesBooks/'.$libro->image)); ?>" alt="single book and cd" style="height: 20rem; width:13rem;">
                            <div class="single-book_download">
                                <button type="button" class="btn btn-outline-secondary" style="margin-top: 60%">Ver Mas</button>
                            </div>
                        </a>
                        <h4 class="single-book__title">Nombre: <strong><?php echo e($libro->bookName); ?></strong></h4>
                        <span class="single-book_title">Autor:<?php echo e($libro->author); ?></span><br>
                        <span class="single-book__price" style="color: #054638;">Q.<?php echo e($libro->price); ?></span>
                    </div>

                    <?php if($i==4): ?>
                        </div> 
                        <div class="books" style="padding-left: 10%;padding-right: 10%">
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    
                    
                </div>   
                <nav >
                    <?php echo $__env->make('pagination.default', ['paginator' => $libros], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </nav>   
            </div> 
        </br>
        </section>
       
</section>
<?php $__env->stopSection(); ?>   

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/Libreria/libros.js')); ?>"></script>
    <script>
        $(document).ready(function(){
            $('input.star').rating();
        });
    </script>
    <script>
        $('.pagination li').addClass('page-item');
        $('.pagination li a').addClass('page-link');
        $('.pagination span').addClass('page-link');
        $('#pag').addClass('pagination justify-content-center');
</script>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('admin.template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/MOVI-Proyecto/resources/views/Library/Index.blade.php ENDPATH**/ ?>