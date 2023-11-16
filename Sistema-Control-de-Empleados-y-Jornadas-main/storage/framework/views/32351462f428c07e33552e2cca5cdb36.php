<?php $__env->startSection('content'); ?>
<h1 class="text-center">Panel de control del Administrador</h1>
<div class="py-4 d-flex col-lg-9 gap-2 w-100">
    <div class="d-flex flex-column h-5 col-lg-2">
        <?php echo $__env->make('layouts._partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-lg-8" style="height: 25rem;">
        <h2 class="text-center">Mapa de Fichajes Hoy</h2>

        <div class="container d-flex flex-column gap-3 align-items-center">
            <div id="map">

            </div>

        </div>
    </div>
</div>
<?php $__env->startSection('scripts'); ?>
    <script>
        let nombreUsuario="<?php echo e(Auth::user()->name); ?>";
    </script>
    <script src="<?php echo e(asset('assets/js/insertMap.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projecto horario\Sistema-Control-de-Empleados-y-Jornadas-main\resources\views/admin/mapa.blade.php ENDPATH**/ ?>