<?php $__env->startSection('content'); ?>
    <!--link per el funcionamnet de la taula -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!--link per el funcionamnet de la taula -->
    <script>
        $(document).ready(function() {
            $('#horarioTable').DataTable();
        });
    </script>


    <h1 class="text-center">Panel de control del Administrador</h1>



    <div class="py-4 d-flex col-lg-9 gap-5 w-100">

        <div class="d-flex col-lg-2">
            <?php echo $__env->make('layouts._partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-lg-11 d-flex">

            <form action="<?php echo e(route('admin.horarioGeneral')); ?>" method="GET" class="mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <label for="mes">Seleccionar:</label>
                        <!-- Desplegable de Mes -->
                        <select name="mes" id="mes" class="form-control">
                            <?php
                                $meses = [
                                    1 => 'Enero',
                                    2 => 'Febrero',
                                    3 => 'Marzo',
                                    4 => 'Abril',
                                    5 => 'Mayo',
                                    6 => 'Junio',
                                    7 => 'Julio',
                                    8 => 'Agosto',
                                    9 => 'Septiembre',
                                    10 => 'Octubre',
                                    11 => 'Noviembre',
                                    12 => 'Diciembre',
                                ];
                            ?>

                            <option value="" <?php if(!$mes): ?> selected <?php endif; ?>>Mes</option>
                            <?php $__currentLoopData = $meses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $nombreMes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key); ?>" <?php if($mes == $key): ?> selected <?php endif; ?>>
                                    <?php echo e($nombreMes); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="anio">Seleccionar:</label>
                        <!-- Desplegable de Año -->
                        <?php
                            $yearRange = range(date('Y') - 10, date('Y') + 10);
                        ?>

                        <select name="anio" id="anio" class="form-control">
                            <option value="" <?php if(!$anio): ?> selected <?php endif; ?>>Año</option>
                            <?php $__currentLoopData = $yearRange; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($year); ?>" <?php if($anio == $year): ?> selected <?php endif; ?>>
                                    <?php echo e($year); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Filtrar</button>
            </form>

            <section>
                <table id="horarioTable" class="table mx-5 text-center w-100">
                    <thead class="table-primary">
                        <th>Nombre</th>
                        <th>Fecha y Hora de Entrada</th>
                        <th>Fecha y Hora de Salida</th>
                        <th>Horas trabajadas</th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $horarioGeneral; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($registro->user->name); ?></td>
                                <td><?php echo e($registro->entrada); ?></td>
                                <td><?php echo e($registro->salida); ?></td>
                                <td>
                                    <?php
                                    $entrada = \Carbon\Carbon::parse($registro->entrada);
                                    $salida = \Carbon\Carbon::parse($registro->salida);
                                    $diferencia = $salida->diff($entrada);
                                    echo $diferencia->format('%H:%I');
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <button id="exportCSV" class="btn btn-success mt-3">Exportar a CSV</button>
                <script>
                    $('#exportCSV').on('click', function() {
                        // Captura los datos de la tabla DataTables actualmente mostrados en la página
                        var table = $('#horarioTable').DataTable();
                        var filteredData = table.rows({ search: 'applied' }).data();

                        var csvData = "Nombre,Fecha y Hora de Entrada,Fecha y Hora de Salida,Horas trabajadas\n";

                        // Itera a través de los datos filtrados y los agrega al CSV
                        filteredData.each(function (value, index) {
                            csvData += value.join(',') + '\n';
                        });

                        // Crea un enlace temporal y simula un clic para descargar el archivo
                        var blob = new Blob([csvData], {
                            type: 'text/csv'
                        });
                        var link = document.createElement('a');
                        link.href = window.URL.createObjectURL(blob);
                        link.download = 'Horario.csv';
                        link.click();
                    });
                </script>

                <div class="d-flex justify-content-center">
                    <?php echo e($horarioGeneral->links()); ?>

                </div>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projecto horario\Sistema-Control-de-Empleados-y-Jornadas-main\resources\views/admin/horarioGeneral.blade.php ENDPATH**/ ?>