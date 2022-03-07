<div x-data="{ dropdownOpen: false }" class="relative">
    <button @click="dropdownOpen = ! dropdownOpen"
        class="flex items-center h-14 space-x-2 focus:outline-none text-gray-700">

        <?php echo e($header); ?>


    </button>

    <div class="absolute right-0  mt-4 min-w-max sm:min-w-full bg-white rounded-md overflow-hidden shadow-xl z-10"
        x-show="dropdownOpen" @click.away="dropdownOpen = false">

        <?php echo e($content); ?>


    </div>
</div>
<?php /**PATH C:\Users\jerem\Desktop\UNIVERSIDAD\CUARTO SEMESTRE\DESARROLLO_DE_APLICACIONES_WEB\PROGRAMAS\Proyecto-final-DAW-JL\resources\views/components/dropdown/menu/option.blade.php ENDPATH**/ ?>