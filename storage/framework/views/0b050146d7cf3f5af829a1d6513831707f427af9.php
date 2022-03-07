<?php $attributes = $attributes->exceptProps([
    'status',
    'color' => 'green'
]); ?>
<?php foreach (array_filter(([
    'status',
    'color' => 'green'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($status): ?>
    <div <?php echo e($attributes->merge(['class' => "bg-$color-500 rounded-md p-3 border-l-4 border-r-4 border-$color-800
                                            font-medium text-sm text-gray-100"])); ?>>
        <?php echo e($status); ?>

    </div>
<?php endif; ?><?php /**PATH C:\Users\jerem\Desktop\UNIVERSIDAD\CUARTO SEMESTRE\DESARROLLO_DE_APLICACIONES_WEB\PROGRAMAS\Proyecto-final-DAW-JL\resources\views/components/session-status.blade.php ENDPATH**/ ?>