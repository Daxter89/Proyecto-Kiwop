<?php $__env->startSection('content'); ?>
<h1 class="text-center">Panel de control del Administrador</h1>

<div class="py-4 d-flex col-lg-9 gap-2 w-100">

    <div class="d-flex col-lg-2">
        <?php echo $__env->make('layouts._partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-lg-8 ">

        <table class="table mx-5 text-center w-75">
            <thead class="table-primary">
              <th >Fecha y Hora de Entrada</th>
              <th>Fecha y Hora de Salida</th>
            </thead>

            <tbody>
             <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <tr>
              <td><?php echo e($horario->entrada); ?></td>
              <td><?php echo e($horario->salida); ?></td>
             </tr>
             
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>

          <div class="d-flex justify-content-center">
            <?php echo e($horarios->links()); ?>

          </div>
    </div>

</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projecto horario\Sistema-Control-de-Empleados-y-Jornadas-main\resources\views/admin/horarios.blade.php ENDPATH**/ ?>