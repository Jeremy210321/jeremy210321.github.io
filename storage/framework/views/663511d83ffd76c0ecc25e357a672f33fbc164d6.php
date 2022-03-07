<?php
/*Colors for this view*/
$primary = 'yellow';
$secondary = 'pink';
?>

<?php if (isset($component)) { $__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AuthLayout::class, ['primaryColor' => $primary,'secondaryColor' => $secondary,'reversColumns' => '0']); ?>
<?php $component->withName('auth-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <!--Login Info-->
     <?php $__env->slot('formTitle', null, []); ?> <?php echo e('Welcome Back'); ?> <?php $__env->endSlot(); ?>

     <?php $__env->slot('formDescription', null, []); ?> <?php echo e('Please sign in to your account'); ?>

        <?php if(session('error')): ?>
            <div class="font-medium text-red-600">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
     <?php $__env->endSlot(); ?>


    <!--Login  Form-->
     <?php $__env->slot('authForm', null, []); ?> 

        <form method="POST" action="<?php echo e(route('login')); ?>" class="space-y-6">
            <?php echo csrf_field(); ?>
            <!--Username or email-->
            <div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'login_field','value' => __('Username or email address')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'login_field','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Username or email address'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'login_field','class' => 'block mt-2 w-full','focusColor' => $primary,'type' => 'text','name' => 'login_field','value' => old('login_field'),'placeholder' => 'Enter your username or email','required' => true,'autofocus' => true]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'login_field','class' => 'block mt-2 w-full','focus-color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($primary),'type' => 'text','name' => 'login_field','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('login_field')),'placeholder' => 'Enter your username or email','required' => true,'autofocus' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <!-- Password -->
            <div class="mt-4">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'password','value' => __('Password')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Password'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'password','class' => 'block mt-2 w-full','focusColor' => $primary,'type' => 'password','name' => 'password','placeholder' => 'Enter your password','required' => true,'autocomplete' => 'current-password']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'password','class' => 'block mt-2 w-full','focus-color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($primary),'type' => 'password','name' => 'password','placeholder' => 'Enter your password','required' => true,'autocomplete' => 'current-password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>

            <div class="mt-4 flex items-center justify-between">
                <!-- Remember Me -->
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.check','data' => ['id' => 'remember_me','name' => 'remember','color' => $primary,'checked' => old('remember') == 'on']]); ?>
<?php $component->withName('check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'remember_me','name' => 'remember','color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($primary),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('remember') == 'on')]); ?>
                    <?php echo e(__('Remember me')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <!--Forgot Password-->
                <?php if(Route::has('password.request')): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.link','data' => ['href' => ''.e(route('password.request')).'','color' => $primary,'hover' => $secondary]]); ?>
<?php $component->withName('link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('password.request')).'','color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($primary),'hover' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($secondary)]); ?>
                        <?php echo e(__('Forgot your password?')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>
            </div>

            <div class="mt-4 flex justify-center">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['class' => 'w-3/5','primaryColor' => $primary,'secondaryColor' => $secondary]]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-3/5','primary-color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($primary),'secondary-color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($secondary)]); ?>
                    <?php echo e(__('Sing in')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>

            <div class="mt-4 flex flex-col items-center justify-center text-md text-gray-500">
                <!--Sign Up-->
                <?php if(Route::has('register')): ?>
                    <span><?php echo e("Don't have an account?"); ?></span>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.link','data' => ['href' => ''.e(route('register')).'','class' => 'text-base font-semibold','color' => $primary,'hover' => $secondary]]); ?>
<?php $component->withName('link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('register')).'','class' => 'text-base font-semibold','color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($primary),'hover' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($secondary)]); ?>
                        <?php echo e(__('Sign up')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>
            </div>
        </form>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3)): ?>
<?php $component = $__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3; ?>
<?php unset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3); ?>
<?php endif; ?>
<?php /**PATH C:\Users\jerem\Desktop\UNIVERSIDAD\CUARTO SEMESTRE\DESARROLLO_DE_APLICACIONES_WEB\PROGRAMAS\Proyecto-final-DAW-JL\resources\views/auth/login.blade.php ENDPATH**/ ?>