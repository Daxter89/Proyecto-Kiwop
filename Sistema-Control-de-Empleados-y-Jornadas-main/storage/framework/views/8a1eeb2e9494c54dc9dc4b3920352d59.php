<?php $__env->startSection('content'); ?>
<h1 class="text-center">Panel de control del Administrador</h1>

<div class="py-4 d-flex col-lg-9 gap-5 w-100">

    <div class="d-flex col-lg-2">
        <?php echo $__env->make('layouts._partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-lg-8 ">
        <h1>Solicitudes Pendientes</h1>

        <?php if($solicitudes->isEmpty()): ?>
            <p>No hay solicitudes pendientes.</p>
        <?php else: ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha de finalización</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($solicitud->titulo); ?></td>
                            <td><?php echo e($solicitud->fecha_inicio); ?></td>
                            <td><?php echo e($solicitud->fecha_final); ?></td>
                            <td>
                                <form action="<?php echo e(route('approve', $solicitud->id)); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-success">Aprobar</button>
                                </form>
                               <form action="<?php echo e(route('reject', $solicitud->id)); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger">Rechazar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projecto horario\Sistema-Control-de-Empleados-y-Jornadas-main\resources\views/admin/solicitudes_pendientes.blade.php ENDPATH**/ ?>