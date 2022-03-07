<?php $attributes = $attributes->exceptProps([
    'color' => 'indigo',
]); ?>
<?php foreach (array_filter(([
    'color' => 'indigo',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<a <?php echo e($attributes->merge(['class' => "block px-4 py-2 text-sm text-gray-500 hover:bg-$color-100"])); ?>>
    <?php echo e($slot); ?>

</a>
<?php /**PATH C:\Users\jerem\Desktop\UNIVERSIDAD\CUARTO SEMESTRE\DESARROLLO_DE_APLICACIONES_WEB\PROGRAMAS\Proyecto-final-DAW-JL\resources\views/components/dropdown/menu/link.blade.php ENDPATH**/ ?>