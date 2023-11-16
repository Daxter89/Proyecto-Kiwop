<?php $__env->startSection('content'); ?>
<h1 class="text-center">Panel de control del Empleado</h1>
<div class="py-4 d-flex col-lg-9 gap-2 w-100">
    <div class="d-flex flex-column h-5 col-lg-2">
        <?php echo $__env->make('layouts._partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-lg-8" style="height: 25rem;">
        <h2 class="text-center">Registrar Horarios</h2>
        <div class="container d-flex flex-column gap-3 align-items-center ">

            <?php if(Auth::user()->activo===1): ?>
            <form action="<?php echo e(route('registrar-entrada-salida')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-primary" name="accion" value="entrada">Registrar Salida</button>
            </form>
            <?php else: ?>
            <form id="entrada" action="<?php echo e(route('registrar-entrada-salida')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-primary" name="accion" value="entrada">Registrar Entrada</button>
            </form>
            <?php endif; ?>

            <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>
        </div>

    </div>
</div>
<?php $__env->startSection('scripts'); ?>
    <script>
        let nombreUsuario="<?php echo e(Auth::user()->name); ?>";
    </script>
    <script src="<?php echo e(asset('assets/js/map.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projecto horario\Sistema-Control-de-Empleados-y-Jornadas-main\resources\views/employee/fichar.blade.php ENDPATH**/ ?>