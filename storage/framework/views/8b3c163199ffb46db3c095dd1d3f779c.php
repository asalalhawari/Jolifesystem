<?php
    if($getType() && $getFor()){
        $type = \TomatoPHP\FilamentTypes\Models\Type::where('key', $getState())
            ->where('for', $getFor())
            ->where('type', $getType())
            ->first();
    }
    else {
      $type = \TomatoPHP\FilamentTypes\Models\Type::where('key', $getState())->first();
    }

    $description = null;

    if($type){
        $value = $type->name;
        $hex = $type->color;
        $icon = $type->icon;
        $description = $type->description;
        list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
        $colorRGB= array($r, $g, $b);
    }
    else {
        $value = $getState();
        $colorRGB = [0,0,0];
        $icon = null;
    }

    $iconExists = false;
    if($icon){
        try {
            app(\BladeUI\Icons\Factory::class)->svg($icon);
             $iconExists = true;
        }catch (\Exception $e){}
    }
?>
<!--[if BLOCK]><![endif]--><?php if($value || config('filament-types.empty_state')): ?>

<span <?php if($description && $getAllowDescription()): ?> x-tooltip="{content: '<?php echo e($description); ?>', theme: $store.theme }" <?php endif; ?> style="<?php echo e(implode([
        "background-color: rgba(".$colorRGB[0].", ".$colorRGB[1].", ".$colorRGB[2].", 0.2);",
        "color: rgba(".$colorRGB[0].", ".$colorRGB[1].", ".$colorRGB[2].", 1);"
    ])); ?>" class="mx-3 fi-badge flex items-center justify-center gap-x-1 rounded-md text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 fi-color-custom bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30 fi-color-primary">

    <!--[if BLOCK]><![endif]--><?php if($icon && $iconExists): ?>
        <div>
            <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-4 w-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal606b6d7eddc2e418f11096356be15e19)): ?>
<?php $attributes = $__attributesOriginal606b6d7eddc2e418f11096356be15e19; ?>
<?php unset($__attributesOriginal606b6d7eddc2e418f11096356be15e19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal606b6d7eddc2e418f11096356be15e19)): ?>
<?php $component = $__componentOriginal606b6d7eddc2e418f11096356be15e19; ?>
<?php unset($__componentOriginal606b6d7eddc2e418f11096356be15e19); ?>
<?php endif; ?>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <div>
        <?php echo e($value ?? config('filament-types.empty_state')); ?>

    </div>
</span>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH D:\Jolifesystem\vendor\tomatophp\filament-types\src/../resources/views/columns/type-column.blade.php ENDPATH**/ ?>