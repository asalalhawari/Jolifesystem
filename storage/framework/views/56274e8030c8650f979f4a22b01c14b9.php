<?php
    use EightyNine\Reports\Enums\VerticalAlignment;
    use EightyNine\Reports\Enums\HorizontalAlignment;

    $verticalAlignment = match ($getVerticalAlignment()) {
        VerticalAlignment::Top => 'vertical-align:top;',
        VerticalAlignment::Middle => 'vertical-align:middle;',
        VerticalAlignment::Bottom => 'vertical-align:bottom;',
    };

    $horizontalAlignment = match ($getHorizontalAlignment()) {
        HorizontalAlignment::Right => 'text-align:right;',
        HorizontalAlignment::Left => 'text-align:left;',
        HorizontalAlignment::Center => 'text-align:center;',
    };
?>
<?php if (isset($component)) { $__componentOriginalda07b93eddb9ed908ec1ed409a4f2aa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda07b93eddb9ed908ec1ed409a4f2aa3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.index','data' => ['style' => 'width:100%;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'width:100%;']); ?>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $getChildComponents(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reportComponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginal8abdc3f5a9c9dd8c9f3c23712655d2f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8abdc3f5a9c9dd8c9f3c23712655d2f2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginalca1389cfce311448447d0904f7976dab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca1389cfce311448447d0904f7976dab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.cell','data' => ['style' => '
            '.e($horizontalAlignment).'

            '.e($verticalAlignment).'

            ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => '
            '.e($horizontalAlignment).'

            '.e($verticalAlignment).'

            ']); ?>
                <?php echo e($reportComponent); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalca1389cfce311448447d0904f7976dab)): ?>
<?php $attributes = $__attributesOriginalca1389cfce311448447d0904f7976dab; ?>
<?php unset($__attributesOriginalca1389cfce311448447d0904f7976dab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalca1389cfce311448447d0904f7976dab)): ?>
<?php $component = $__componentOriginalca1389cfce311448447d0904f7976dab; ?>
<?php unset($__componentOriginalca1389cfce311448447d0904f7976dab); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8abdc3f5a9c9dd8c9f3c23712655d2f2)): ?>
<?php $attributes = $__attributesOriginal8abdc3f5a9c9dd8c9f3c23712655d2f2; ?>
<?php unset($__attributesOriginal8abdc3f5a9c9dd8c9f3c23712655d2f2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8abdc3f5a9c9dd8c9f3c23712655d2f2)): ?>
<?php $component = $__componentOriginal8abdc3f5a9c9dd8c9f3c23712655d2f2; ?>
<?php unset($__componentOriginal8abdc3f5a9c9dd8c9f3c23712655d2f2); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda07b93eddb9ed908ec1ed409a4f2aa3)): ?>
<?php $attributes = $__attributesOriginalda07b93eddb9ed908ec1ed409a4f2aa3; ?>
<?php unset($__attributesOriginalda07b93eddb9ed908ec1ed409a4f2aa3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda07b93eddb9ed908ec1ed409a4f2aa3)): ?>
<?php $component = $__componentOriginalda07b93eddb9ed908ec1ed409a4f2aa3; ?>
<?php unset($__componentOriginalda07b93eddb9ed908ec1ed409a4f2aa3); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Anas\system-manager\vendor\eightynine\filament-reports\src\/../resources/views/components/body/layout/body-column.blade.php ENDPATH**/ ?>