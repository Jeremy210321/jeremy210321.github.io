<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>




<body class="font-sans antialiased">

    <div class="relative">

        <!--Side-->
        <div class="md:fixed md:w-2/5  <?php echo e($reversColumns ? 'right-0' : 'left-0'); ?>">

            <div
                class="hidden md:flex justify-center items-center  min-h-screen
             bg-gradient-to-r from-<?php echo e($primaryColor); ?>-500 to-<?php echo e($secondaryColor); ?>-500">

                <div class="text-center text-white space-y-3 p-8">
                    <a href="<?php echo e(route('home')); ?>" class="inline-flex">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icon','data' => ['class' => 'w-28 h-28 mx-auto']]); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-28 h-28 mx-auto']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </a>

                    
                    <h2 class="text-3xl font-extrabold">Prison System</h2>

                    
                    <p class="text-base">Web system for the management of a penitentiary center.</p>

                </div>
            </div>

        </div>

        
        <div
            class="absolute flex w-full md:w-3/5 min-h-screen items-center justify-center py-16
         <?php echo e($reversColumns ? 'left-0' : 'right-0'); ?>">

            <main class="max-w-md w-full h-auto px-4">

                <div class="text-center space-y-2">
                    <a href="<?php echo e(route('home')); ?>" class="inline-flex md:hidden">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icon','data' => ['class' => 'w-14 h-14 mx-auto text-'.e($primaryColor).'-500']]); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-14 h-14 mx-auto text-'.e($primaryColor).'-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </a>

                    
                    <h2 class="text-2xl md:text-3xl font-bold">
                        
                        <?php echo e($formTitle); ?>

                    </h2>

                    
                    <p class="text-sm text-gray-500">
                        
                        <?php echo e($formDescription); ?>

                    </p>

                    
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-session-status','data' => ['class' => 'mb-4','status' => session('status')]]); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
                <div class="mt-6">
                    <?php echo e($authForm); ?>   
                </div>

            </main>


        </div>

    </div>


</body>

</html><?php /**PATH C:\Users\jerem\Desktop\UNIVERSIDAD\CUARTO SEMESTRE\DESARROLLO_DE_APLICACIONES_WEB\PROGRAMAS\Proyecto-final-DAW-JL\resources\views/layouts/auth.blade.php ENDPATH**/ ?>