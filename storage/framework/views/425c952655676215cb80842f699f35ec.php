<?php
    $text = $getText();
    $fontSize = $getFontSize();
    $fontWeight = $getFontWeight();
    $color = \Filament\Support\get_color_css_variables($getColor(), shades: [400, 600], alias: 'reports::components.text');
?>
<span style="
        <?php echo e($fontSize->value); ?>

        <?php echo e($fontWeight->value); ?>

        <?php echo e($color); ?>

    "
    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        match ($color) {
            null => 'text-gray-950 dark:text-white',
            'gray' => 'text-gray-500 dark:text-gray-400',
            default => 'text-custom-600 dark:text-custom-400',
        },
    ]); ?>"">
    <?php echo $text; ?>

</span>
<?php /**PATH C:\Users\Anas\system-manager\vendor\eightynine\filament-reports\src\/../resources/views/components/text.blade.php ENDPATH**/ ?>