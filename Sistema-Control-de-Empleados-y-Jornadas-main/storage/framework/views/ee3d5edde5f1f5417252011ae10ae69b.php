<?php $__env->startSection('content'); ?>
<h1 class="text-center">Panel de control del Usuario</h1>

<div class="py-4 d-flex col-lg-9 gap-5 w-100">

    <div class="d-flex col-lg-2">
        <?php echo $__env->make('layouts._partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-lg-8 ">

        <div class="card">
            <div class="card-header"><?php echo e(__('Solicitud')); ?></div>

            <div class="card-body">
                <form method="POST" action="<?php echo e(route('hacer.solicitud')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Título')); ?></label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" value="<?php echo e(old('title')); ?>" required autocomplete="title" autofocus>

                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="start" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Fecha de inicio')); ?></label>

                        <div class="col-md-6">
                            <input id="start" type="date" class="form-control <?php $__errorArgs = ['start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="start" value="<?php echo e(old('start')); ?>" required autocomplete="start">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="end" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Fecha final')); ?></label>

                        <div class="col-md-6">
                            <input id="end" type="date" class="form-control <?php $__errorArgs = ['end'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="end" required autocomplete="new-end">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(__('Enviar')); ?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projecto horario\Sistema-Control-de-Empleados-y-Jornadas-main\resources\views/employee/solicitud.blade.php ENDPATH**/ ?>