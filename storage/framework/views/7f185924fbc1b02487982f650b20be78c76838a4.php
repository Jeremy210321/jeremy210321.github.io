<?php $attributes = $attributes->exceptProps([
'id' => 'checked',
'color' => 'blue',
'checked' => false
]); ?>
<?php foreach (array_filter(([
'id' => 'checked',
'color' => 'blue',
'checked' => false
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<label for="<?php echo e($id); ?>" class="inline-flex items-center cursor-pointer">
    <input id="<?php echo e($id); ?>"
           type="checkbox"
           <?php echo e($checked ? 'checked' : ''); ?>

           <?php echo $attributes->merge(['class' => "rounded border-gray-300 text-$color-500 shadow-sm cursor-pointer focus:ring focus:ring-$color-200 focus:ring-opacity-50"]); ?>>
    <span class="ml-2 text-sm text-gray-600"><?php echo e($slot); ?></span>
</label>
<?php /**PATH C:\Users\jerem\Desktop\UNIVERSIDAD\CUARTO SEMESTRE\DESARROLLO_DE_APLICACIONES_WEB\PROGRAMAS\Proyecto-final-DAW-JL\resources\views/components/check.blade.php ENDPATH**/ ?>