<?php $__env->startSection('content'); ?>
<h1 class="text-center">Panel de control del Administrador</h1>

<div class="py-4 d-flex col-lg-9 gap-5 w-100">

    <div class="d-flex col-lg-2">
        <?php echo $__env->make('layouts._partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-lg-8 d-flex gap-5">

            <div class="card w-25 p-0">
                <h5 class="card-header">Mis Documentos</h5>
                <img src="<?php echo e(asset('assets/img/carpeta.png')); ?>" alt="carpeta" class="card-image-top">
                <div class="card-body">
                    <a href="<?php echo e(route('misDocs')); ?>" class="btn btn-success">Ver Docs</a>
                </div>
            </div>
            <?php if(Auth::user()->rol==='admin'): ?>
            <div class="card w-25 p-0">
                <h5 class="card-header">Docs de Empleados</h5>
                <img src="<?php echo e(asset('assets/img/carpeta.png')); ?>" alt="carpeta" class="card-image-top">
                <div class="card-body">
                    <a href="<?php echo e(route('empleados')); ?>" class="btn btn-success">Ver Docs</a>
                </div>
            </div>
            <?php else: ?>
            <div class="card w-25 p-0">
                <h5 class="card-header">Docs del Administrador</h5>
                <img src="<?php echo e(asset('assets/img/carpeta.png')); ?>" alt="carpeta" class="card-image-top">
                <div class="card-body">
                    <a href="<?php echo e(route('adminDocs')); ?>" class="btn btn-success">Ver Docs</a>
                </div>
            </div>

            <?php endif; ?>


    </div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projecto horario\Sistema-Control-de-Empleados-y-Jornadas-main\resources\views/ver_docs.blade.php ENDPATH**/ ?>