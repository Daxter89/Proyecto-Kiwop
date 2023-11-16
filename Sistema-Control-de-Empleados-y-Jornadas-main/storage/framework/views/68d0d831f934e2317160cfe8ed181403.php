<?php $__env->startSection('content'); ?>
<h1 class="text-center">Mis Archivos</h1>

<div class="py-4 d-flex col-lg-9 gap-5 w-100">

    <div class="d-flex col-lg-2">
        <?php echo $__env->make('layouts._partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-lg-8 d-flex flex-wrap gap-5">
        <?php $__currentLoopData = $misDocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <a href="<?php echo e(asset(Storage::url($doc->ruta))); ?>" class=" card text-decoration-none text-success d-flex flex-column align-items-center text-start" style="width: 15rem;">
                <img src="<?php echo e(asset('assets/img/doc.png')); ?>" class="card-img-top w-25" alt="doc">
                <div class="card-body d-flex justify-center m-auto text-center w-100">
                  <p class="card-text w-100 text-center" ><?php echo e($doc->nombre); ?></p>
                </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projecto horario\Sistema-Control-de-Empleados-y-Jornadas-main\resources\views/mis_docs.blade.php ENDPATH**/ ?>