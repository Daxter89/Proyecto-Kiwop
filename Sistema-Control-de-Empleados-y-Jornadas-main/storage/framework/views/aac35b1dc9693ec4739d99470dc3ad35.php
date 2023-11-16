<?php $__env->startSection('content'); ?>
<h1 class="text-center">Panel de control del Administrador</h1>

<div class="py-4 d-flex col-lg-9 gap-5 w-100">

    <div class="d-flex col-lg-2">
        <?php echo $__env->make('layouts._partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-lg-8 " id="calendar" style="max-height: 30.5rem;">



    </div>

</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projecto horario\Sistema-Control-de-Empleados-y-Jornadas-main\resources\views/admin/calendario.blade.php ENDPATH**/ ?>