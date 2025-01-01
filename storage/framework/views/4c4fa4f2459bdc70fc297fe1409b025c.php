<?php if (isset($component)) { $__componentOriginal166a02a7c5ef5a9331faf66fa665c256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal166a02a7c5ef5a9331faf66fa665c256 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.page.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-panels::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex flex-row-reverse gap-8">
        <?php echo e($this->actionsPanel); ?>

        <?php if (isset($component)) { $__componentOriginalbe4dee7c6a03344f7bbafcfc59ea72e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe4dee7c6a03344f7bbafcfc59ea72e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table..index','data' => ['class' => 'bg-white dark:bg-gray-900 border-gray-100 dark:border-gray-900','id' => 'fi-report','style' => '
            max-width:100%;
            min-width:75%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-white dark:bg-gray-900 border-gray-100 dark:border-gray-900','id' => 'fi-report','style' => '
            max-width:100%;
            min-width:75%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            ']); ?>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.cell','data' => ['class' => 'pad','style' => ''.e($section == 'pad'
                            ? 'padding-top:48px;'
                            : 'padding-left:48px; padding-right:48px;  padding-top: 20px; vertical-align: top;').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'pad','style' => ''.e($section == 'pad'
                            ? 'padding-top:48px;'
                            : 'padding-left:48px; padding-right:48px;  padding-top: 20px; vertical-align: top;').'']); ?>
                        <!--[if BLOCK]><![endif]--><?php if($section != 'pad'): ?>
                            <?php echo e($this->$section); ?>

                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
<?php if (isset($__attributesOriginalbe4dee7c6a03344f7bbafcfc59ea72e5)): ?>
<?php $attributes = $__attributesOriginalbe4dee7c6a03344f7bbafcfc59ea72e5; ?>
<?php unset($__attributesOriginalbe4dee7c6a03344f7bbafcfc59ea72e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe4dee7c6a03344f7bbafcfc59ea72e5)): ?>
<?php $component = $__componentOriginalbe4dee7c6a03344f7bbafcfc59ea72e5; ?>
<?php unset($__componentOriginalbe4dee7c6a03344f7bbafcfc59ea72e5); ?>
<?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal166a02a7c5ef5a9331faf66fa665c256)): ?>
<?php $attributes = $__attributesOriginal166a02a7c5ef5a9331faf66fa665c256; ?>
<?php unset($__attributesOriginal166a02a7c5ef5a9331faf66fa665c256); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal166a02a7c5ef5a9331faf66fa665c256)): ?>
<?php $component = $__componentOriginal166a02a7c5ef5a9331faf66fa665c256; ?>
<?php unset($__componentOriginal166a02a7c5ef5a9331faf66fa665c256); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Anas\system-manager\vendor\eightynine\filament-reports\src\/../resources/views/pages/report.blade.php ENDPATH**/ ?>