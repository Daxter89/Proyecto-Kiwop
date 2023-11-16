<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        a.text-white{
            background-color: #312F70;

        }
        a.text-white:hover{
            background-color: #4FB497;
        }
    </style>
</head>
<body>
    <nav class="position-fixed">
        <div class="d-flex flex-column gap-2 p-2">
            <?php if(Auth::user()->rol==='admin'): ?>
            <a class="text-white text-decoration-none nav-item btn"  href="<?php echo e(route('fichar-admin')); ?>" >
                Fichar
            </a>
            <a href="<?php echo e(route('admin.horarios')); ?>" class="text-white text-decoration-none nav-item btn ">
                Mis Horarios
            </a>
            <a href="<?php echo e(route('admin.usuarios')); ?>" class="text-white text-decoration-none nav-item btn ">
                Gestionar Empleados
            </a>

            <a href="<?php echo e(route('mostrar.horario.general')); ?>" class="btn text-white">
                Consultar Horario General
            </a>
            <a class="text-white text-decoration-none nav-item btn " href="<?php echo e(route('add.employee.form')); ?>">
                Añadir Empleados
            </a>
            <a class="text-white text-decoration-none nav-item btn " href="<?php echo e(route('solicitudes-pendientes')); ?>">
                Solicitudes Pendientes
            </a>
            <a class="text-white text-decoration-none nav-item btn " href="<?php echo e(route('calendario')); ?>">
                Calendario
            </a>
            <a class="text-white text-decoration-none nav-item btn " href="<?php echo e(route('mapa')); ?>">
                Mapa de Fichajes
            </a>

            <?php else: ?>

            <a href="<?php echo e(route('fichar-employee')); ?>" class="text-white text-decoration-none nav-item btn ">
                Fichar
            </a>
            <a href="<?php echo e(route('employee.horarios')); ?>" class="text-white text-decoration-none nav-item btn ">
                Mis Horarios
            </a>
            <a href="<?php echo e(route('solicitud')); ?>" class="text-white text-decoration-none nav-item btn ">
                Hacer una Solicitud
            </a>

            <?php endif; ?>
            <a class="text-white text-decoration-none nav-item btn " href="<?php echo e(route('archivo.formulario')); ?>">
                Subir Archivos
            </a>
            <a class="text-white text-decoration-none nav-item btn " href="<?php echo e(route('documentos')); ?>">
                Ver Documentos
            </a>
            </div>
    </nav>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Projecto horario\Sistema-Control-de-Empleados-y-Jornadas-main\resources\views/layouts/_partials/nav.blade.php ENDPATH**/ ?>