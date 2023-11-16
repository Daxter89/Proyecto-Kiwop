<?php $__env->startSection('content'); ?>
<h1 class="text-center">Panel de control del Administrador</h1>

<div class="py-4 d-flex col-lg-9 gap-5 w-100">

    <div class="d-flex col-lg-2">
        <?php echo $__env->make('layouts._partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>


    <div class="col-lg-8 ">

        <table class="table mx-5 text-center w-75">
            <thead class="table-primary">
                <tr>
                    <th>Nombre</th>
                    <th>Actividad</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($usuario->name); ?></td>
                        <td>
                            <?php if($usuario->activo === 0): ?>
                                Inactivo
                            <?php else: ?>
                                Activo
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($usuario->habilitado ? 'Habilitado' : 'Deshabilitado'); ?></td>
                        <td>
                            <?php if($usuario->habilitado): ?>
                                <form action="<?php echo e(route('usuarios.desactivar', $usuario)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <button type="submit" class="btn btn-danger">Desactivar</button>
                                </form>
                            <?php else: ?>
                                <form action="<?php echo e(route('usuarios.reactivar', $usuario)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <button type="submit" class="btn btn-info">Reactivar</button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>


    </div>

</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projecto horario\Sistema-Control-de-Empleados-y-Jornadas-main\resources\views/admin/empleados.blade.php ENDPATH**/ ?>