<?php $attributes = $attributes->exceptProps([
'primaryColor' => 'blue',
'secondaryColor' => 'green'
]); ?>
<?php foreach (array_filter(([
'primaryColor' => 'blue',
'secondaryColor' => 'green'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<button <?php echo e($attributes->merge([
    'type' => 'submit',
    'class' => "inline-flex justify-center p-2 bg-gradient-to-r from-$primaryColor-500 to-$secondaryColor-500  rounded-full font-semibold text-base text-white tracking-widest hover:from-$primaryColor-600 hover:to-$secondaryColor-600 focus:outline-none focus:border-$primaryColor-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
    ])); ?>>
    <?php echo e($slot); ?>

</button>
<?php /**PATH C:\Users\jerem\Desktop\UNIVERSIDAD\CUARTO SEMESTRE\DESARROLLO_DE_APLICACIONES_WEB\PROGRAMAS\Proyecto-final-DAW-JL\resources\views/components/button.blade.php ENDPATH**/ ?>