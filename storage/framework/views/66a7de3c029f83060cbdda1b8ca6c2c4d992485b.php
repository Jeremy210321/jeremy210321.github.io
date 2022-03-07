<?php $attributes = $attributes->exceptProps([
'color' => 'blue',
'hover' => 'green'
]); ?>
<?php foreach (array_filter(([
'color' => 'blue',
'hover' => 'green'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<a <?php echo $attributes->merge(['class'=> "text-sm text-$color-600 hover:text-$hover-700"]); ?>>
    <?php echo e($slot); ?>

</a>
<?php /**PATH C:\Users\jerem\Desktop\UNIVERSIDAD\CUARTO SEMESTRE\DESARROLLO_DE_APLICACIONES_WEB\PROGRAMAS\Proyecto-final-DAW-JL\resources\views/components/link.blade.php ENDPATH**/ ?>