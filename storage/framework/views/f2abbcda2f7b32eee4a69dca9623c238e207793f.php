<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo e(config('app.name')); ?> - Admin</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/css/adminlte.min.css')); ?>">
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('css/dashboard.css')); ?>" rel="stylesheet">
    <!-- Google Font: Nunito -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate('admin'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <?php echo $__env->make('admin.template.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link mt-2">
                <i class="fas fa-tshirt brand-image mt-1 ml-3"></i>
                <h4 class="brand-text text-center"><?php echo e(config('app.name')); ?></h4>
            </a>

            <!-- Sidebar -->
            <?php echo $__env->make('admin.template.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <?php echo $__env->yieldContent('main-content'); ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            Copyright &copy; 2023 <?php echo e(config('app.name')); ?> All rights reserved by kelompok 5 <3
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- Logout Modal -->
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.modals.logout-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.modals.logout-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php echo $__env->yieldContent('modals'); ?>

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bs-custom-file-input/bs-custom-file-input.min.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('vendor/adminlte/js/adminlte.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/myscript.js')); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>

    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH D:\kirana\o\keuangan_laundry\resources\views/admin/template/main.blade.php ENDPATH**/ ?>