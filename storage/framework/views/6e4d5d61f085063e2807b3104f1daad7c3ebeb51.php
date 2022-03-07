<?php $attributes = $attributes->exceptProps([
    'isActive' => false,
    'color' => 'indigo',
]); ?>
<?php foreach (array_filter(([
    'isActive' => false,
    'color' => 'indigo',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div x-data="{ dropdownOpen: <?php echo e($isActive ? 'true' : 'false'); ?>}">
    <button @click="dropdownOpen = ! dropdownOpen"
        <?php echo e($attributes->merge([
            'class' => "flex justify-between items-center p-2 text-gray-500 rounded-md hover:bg-$color-100"
        ])); ?>

        :class="{'bg-<?php echo e($color); ?>-100': dropdownOpen }">

        <div class="inline-flex space-x-2 items-center">

            <?php echo e($header); ?>


        </div>

        <div class="transition-transform transform"
            :class="{ 'rotate-180': dropdownOpen }">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.chevron-down','data' => []]); ?>
<?php $component->withName('icons.chevron-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
    </button>
    <div x-show="dropdownOpen" class="mt-2 space-y-2 px-7">

       <?php echo e($content); ?>


    </div>
</div>
<?php /**PATH C:\Users\jerem\Desktop\UNIVERSIDAD\CUARTO SEMESTRE\DESARROLLO_DE_APLICACIONES_WEB\PROGRAMAS\Proyecto-final-DAW-JL\resources\views/components/dropdown/simple/option.blade.php ENDPATH**/ ?>