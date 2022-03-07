<?php $attributes = $attributes->exceptProps([
    'color' => 'gray',
]); ?>
<?php foreach (array_filter(([
    'color' => 'gray',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<a role="menuitem"
    <?php echo e($attributes->merge([
                           'class' => "block p-2 text-sm text-$color-500 transition-colors duration-200
                           hover:text-$color-800 cursor-pointer"
    ])); ?>>

    <?php echo e($slot); ?>


</a>
<?php /**PATH C:\Users\jerem\Desktop\UNIVERSIDAD\CUARTO SEMESTRE\DESARROLLO_DE_APLICACIONES_WEB\PROGRAMAS\Proyecto-final-DAW-JL\resources\views/components/dropdown/simple/link.blade.php ENDPATH**/ ?>