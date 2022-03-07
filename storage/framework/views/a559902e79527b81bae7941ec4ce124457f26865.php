<?php $attributes = $attributes->exceptProps([
'disabled' => false,
'focusColor' => 'blue'
]); ?>
<?php foreach (array_filter(([
'disabled' => false,
'focusColor' => 'blue'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<input
    <?php echo e($disabled ? 'disabled' : ''); ?>

    <?php echo $attributes->merge(['class' => "rounded-2xl text-base px-4 py-2 border-0 border-b border-gray-300 focus:ring-0 focus:border-$focusColor-500 disabled:opacity-50"]); ?>

>
<?php /**PATH C:\Users\jerem\Desktop\UNIVERSIDAD\CUARTO SEMESTRE\DESARROLLO_DE_APLICACIONES_WEB\PROGRAMAS\Proyecto-final-DAW-JL\resources\views/components/input.blade.php ENDPATH**/ ?>