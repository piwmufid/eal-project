<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['disabled' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['disabled' => false]); ?>
<?php foreach (array_filter((['disabled' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<input <?php echo e($disabled ? 'disabled' : ''); ?> <?php echo $attributes->merge([
    'class' => 'focus:border-sky-700 file:mr-4 file:py-2 file:px-4
                file:rounded-md file:border-0
                file:text-sm hover:file:bg-sky-500 hover:file:text-white focus:border-sky-700 focus:ring-sky-700 shadow-sm',
]); ?>>
<?php /**PATH D:\Walid\eal-project\resources\views/components/file-input.blade.php ENDPATH**/ ?>