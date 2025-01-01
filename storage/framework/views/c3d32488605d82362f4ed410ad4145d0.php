<?php
    $data = $getData();
    $hasHeadings = $hasHeadings();
    $headings = $getHeadings();
    $isFirstColumnUsedAsHeadings = $isFirstColumnUsedAsHeadings();
    $columns = $getColumns();
    $hasColumns = $hasColumns();
    $hasSummary = $hasSummary();
?>
<?php if (isset($component)) { $__componentOriginalda07b93eddb9ed908ec1ed409a4f2aa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda07b93eddb9ed908ec1ed409a4f2aa3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.index','data' => ['class' => 'border-t-4 border-primary-500 print:w-screen','style' => 'width: 100%;
border-bottom: 1px solid rgb(210, 210, 210);']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'border-t-4 border-primary-500 print:w-screen','style' => 'width: 100%;
border-bottom: 1px solid rgb(210, 210, 210);']); ?>

    <?php if (isset($component)) { $__componentOriginala8664d12d4170955d6564707ac950dd7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8664d12d4170955d6564707ac950dd7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.head','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <!--[if BLOCK]><![endif]--><?php if($hasHeadings): ?>
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
                <!--[if BLOCK]><![endif]--><?php if (! ($hasColumns)): ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $headings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginal939393992b220ec849415dd70262896f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal939393992b220ec849415dd70262896f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.head-cell','data' => ['style' => '
                        padding-left: 8px;
                        padding-right: 8px;
                        padding-top: 4px;
                        padding-bottom: 4px;
                        border-bottom: 1px solid #aaa;
                        border-top: 1px solid #aaa;
                        text-align: left;
                        font-weight: bold;
                    ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.head-cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => '
                        padding-left: 8px;
                        padding-right: 8px;
                        padding-top: 4px;
                        padding-bottom: 4px;
                        border-bottom: 1px solid #aaa;
                        border-top: 1px solid #aaa;
                        text-align: left;
                        font-weight: bold;
                    ']); ?>
                            <?php echo e($heading); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal939393992b220ec849415dd70262896f)): ?>
<?php $attributes = $__attributesOriginal939393992b220ec849415dd70262896f; ?>
<?php unset($__attributesOriginal939393992b220ec849415dd70262896f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal939393992b220ec849415dd70262896f)): ?>
<?php $component = $__componentOriginal939393992b220ec849415dd70262896f; ?>
<?php unset($__componentOriginal939393992b220ec849415dd70262896f); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <?php else: ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $alignment = $column->getAlignment() ?? \Filament\Support\Enums\Alignment::Start;
                            if (! $alignment instanceof \Filament\Support\Enums\Alignment) {
                                $alignment = filled($alignment) ? (\Filament\Support\Enums\Alignment::tryFrom($alignment) ?? $alignment) : null;
                            }
                            $columnClasses = \Illuminate\Support\Arr::toCssClasses([
                                match ($alignment) {
                                    \Filament\Support\Enums\Alignment::Start => 'justify-start text-start',
                                    \Filament\Support\Enums\Alignment::Center => 'justify-center text-center',
                                    \Filament\Support\Enums\Alignment::End => 'justify-end text-end',
                                    \Filament\Support\Enums\Alignment::Left => 'justify-start text-left',
                                    \Filament\Support\Enums\Alignment::Right => 'justify-end text-right',
                                    \Filament\Support\Enums\Alignment::Justify => 'justify-between text-justify',
                                    default => $alignment,
                                },
                            ]);
                        ?>
                        <?php if (isset($component)) { $__componentOriginal939393992b220ec849415dd70262896f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal939393992b220ec849415dd70262896f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.head-cell','data' => ['class' => ''.e($columnClasses).'','style' => '
                                    padding-left: 8px;
                                    padding-right: 8px;
                                    padding-top: 4px;
                                    padding-bottom: 4px;
                                    border-bottom: 1px solid #aaa;
                                    border-top: 1px solid #aaa;
                                    font-weight: bold;
                                ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.head-cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ''.e($columnClasses).'','style' => '
                                    padding-left: 8px;
                                    padding-right: 8px;
                                    padding-top: 4px;
                                    padding-bottom: 4px;
                                    border-bottom: 1px solid #aaa;
                                    border-top: 1px solid #aaa;
                                    font-weight: bold;
                                ']); ?>
                            <?php echo e(str($column->getLabel())); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal939393992b220ec849415dd70262896f)): ?>
<?php $attributes = $__attributesOriginal939393992b220ec849415dd70262896f; ?>
<?php unset($__attributesOriginal939393992b220ec849415dd70262896f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal939393992b220ec849415dd70262896f)): ?>
<?php $component = $__componentOriginal939393992b220ec849415dd70262896f; ?>
<?php unset($__componentOriginal939393992b220ec849415dd70262896f); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

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
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8664d12d4170955d6564707ac950dd7)): ?>
<?php $attributes = $__attributesOriginala8664d12d4170955d6564707ac950dd7; ?>
<?php unset($__attributesOriginala8664d12d4170955d6564707ac950dd7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8664d12d4170955d6564707ac950dd7)): ?>
<?php $component = $__componentOriginala8664d12d4170955d6564707ac950dd7; ?>
<?php unset($__componentOriginala8664d12d4170955d6564707ac950dd7); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal754533531af94cafd911ece9d1e40114 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal754533531af94cafd911ece9d1e40114 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.body','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rowIndex => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--[if BLOCK]><![endif]--><?php if($loop->first && $isFirstColumnUsedAsHeadings): ?>
                        <?php if (isset($component)) { $__componentOriginal939393992b220ec849415dd70262896f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal939393992b220ec849415dd70262896f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.head-cell','data' => ['style' => '
                        padding-left: 8px;
                        padding-right: 8px;
                        padding-top: 4px;
                        padding-bottom: 4px;
                        border-bottom: 1px solid #aaa;
                        border-top: 1px solid #aaa;
                        text-align: left;
                        font-weight: bold;
                        '.e($loop->parent->last ? 'border-bottom: 1px solid #aaa;' : 'border-bottom: 1px solid #eee;').'

                    ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.head-cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => '
                        padding-left: 8px;
                        padding-right: 8px;
                        padding-top: 4px;
                        padding-bottom: 4px;
                        border-bottom: 1px solid #aaa;
                        border-top: 1px solid #aaa;
                        text-align: left;
                        font-weight: bold;
                        '.e($loop->parent->last ? 'border-bottom: 1px solid #aaa;' : 'border-bottom: 1px solid #eee;').'

                    ']); ?>
                            <?php echo e($cell); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal939393992b220ec849415dd70262896f)): ?>
<?php $attributes = $__attributesOriginal939393992b220ec849415dd70262896f; ?>
<?php unset($__attributesOriginal939393992b220ec849415dd70262896f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal939393992b220ec849415dd70262896f)): ?>
<?php $component = $__componentOriginal939393992b220ec849415dd70262896f; ?>
<?php unset($__componentOriginal939393992b220ec849415dd70262896f); ?>
<?php endif; ?>
                    <?php elseif($hasColumns): ?>
                        
                        <?php
                            $column = $getColumnByName($key);
                            $column->record($row);
                            $column->rowLoop($loop->parent);
                        ?>
                        <!--[if BLOCK]><![endif]--><?php if($column->areRowsGrouped()): ?>
                            <?php
                                $rowspan = $column->areRowsGrouped() ?
                                    $getNumberOfGroupedCells($rowIndex, $key, $cell) : 1;
                            ?>
                            <!--[if BLOCK]><![endif]--><?php if($isFirstWithinGroup($rowIndex, $key, $cell)): ?>
                                <?php if (isset($component)) { $__componentOriginalca1389cfce311448447d0904f7976dab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca1389cfce311448447d0904f7976dab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.cell','data' => ['rowspan' => ''.e($rowspan).'','style' => '
                                        padding-left: 8px;
                                        padding-right: 8px;
                                        padding-top: 4px;
                                        padding-bottom: 4px;
                                        '.e($loop->parent->last ? 'border-bottom: 1px solid #aaa;' : 'border-bottom: 1px solid #eee;').'

                                        ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rowspan' => ''.e($rowspan).'','style' => '
                                        padding-left: 8px;
                                        padding-right: 8px;
                                        padding-top: 4px;
                                        padding-bottom: 4px;
                                        '.e($loop->parent->last ? 'border-bottom: 1px solid #aaa;' : 'border-bottom: 1px solid #eee;').'

                                        ']); ?>
                                    <?php if (isset($component)) { $__componentOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-tables::components.columns.column','data' => ['column' => $column,'isClickDisabled' => $column->isClickDisabled(),'record' => $row,'recordKey' => $loop->iteration]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-tables::columns.column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['column' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($column),'is-click-disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($column->isClickDisabled()),'record' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'record-key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loop->iteration)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8)): ?>
<?php $attributes = $__attributesOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8; ?>
<?php unset($__attributesOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8)): ?>
<?php $component = $__componentOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8; ?>
<?php unset($__componentOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8); ?>
<?php endif; ?>
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
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php else: ?>
                            <?php if (isset($component)) { $__componentOriginalca1389cfce311448447d0904f7976dab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca1389cfce311448447d0904f7976dab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.cell','data' => ['style' => '
                                    padding-left: 8px;
                                    padding-right: 8px;
                                    padding-top: 4px;
                                    padding-bottom: 4px;
                                    '.e($loop->parent->last ? 'border-bottom: 1px solid #aaa;' : 'border-bottom: 1px solid #eee;').'

                                    ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => '
                                    padding-left: 8px;
                                    padding-right: 8px;
                                    padding-top: 4px;
                                    padding-bottom: 4px;
                                    '.e($loop->parent->last ? 'border-bottom: 1px solid #aaa;' : 'border-bottom: 1px solid #eee;').'

                                    ']); ?>
                                <?php if (isset($component)) { $__componentOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-tables::components.columns.column','data' => ['column' => $column,'isClickDisabled' => $column->isClickDisabled(),'record' => $row,'recordKey' => $loop->iteration]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-tables::columns.column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['column' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($column),'is-click-disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($column->isClickDisabled()),'record' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'record-key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loop->iteration)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8)): ?>
<?php $attributes = $__attributesOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8; ?>
<?php unset($__attributesOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8)): ?>
<?php $component = $__componentOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8; ?>
<?php unset($__componentOriginal9e6c25ad176a3fd7bc1fa75b239c0fc8); ?>
<?php endif; ?>
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
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        
                    <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginalca1389cfce311448447d0904f7976dab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca1389cfce311448447d0904f7976dab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.cell','data' => ['style' => '
                            padding-left: 8px;
                            padding-right: 8px;
                            padding-top: 4px;
                            padding-bottom: 4px;
                            '.e($loop->parent->last ? 'border-bottom: 1px solid #aaa;' : 'border-bottom: 1px solid #eee;').'

                        ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => '
                            padding-left: 8px;
                            padding-right: 8px;
                            padding-top: 4px;
                            padding-bottom: 4px;
                            '.e($loop->parent->last ? 'border-bottom: 1px solid #aaa;' : 'border-bottom: 1px solid #eee;').'

                        ']); ?>
                            <span style="
                            font-size: 12px;
                        ">

                                <?php echo e($cell); ?>

                            </span>
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
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
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
<?php if (isset($__attributesOriginal754533531af94cafd911ece9d1e40114)): ?>
<?php $attributes = $__attributesOriginal754533531af94cafd911ece9d1e40114; ?>
<?php unset($__attributesOriginal754533531af94cafd911ece9d1e40114); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal754533531af94cafd911ece9d1e40114)): ?>
<?php $component = $__componentOriginal754533531af94cafd911ece9d1e40114; ?>
<?php unset($__componentOriginal754533531af94cafd911ece9d1e40114); ?>
<?php endif; ?>
    <!--[if BLOCK]><![endif]--><?php if($hasSummary): ?>
        <?php if (isset($component)) { $__componentOriginal3554959944aaa14378233760a7596045 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3554959944aaa14378233760a7596045 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.foot','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.foot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php

                        $alignment = $column->getAlignment() ?? \Filament\Support\Enums\Alignment::Start;
                        if (! $alignment instanceof \Filament\Support\Enums\Alignment) {
                            $alignment = filled($alignment) ? (\Filament\Support\Enums\Alignment::tryFrom($alignment) ?? $alignment) : null;
                        }
                        $columnClasses = \Illuminate\Support\Arr::toCssClasses([
                            match ($alignment) {
                                \Filament\Support\Enums\Alignment::Start => 'justify-start text-start',
                                \Filament\Support\Enums\Alignment::Center => 'justify-center text-center',
                                \Filament\Support\Enums\Alignment::End => 'justify-end text-end',
                                \Filament\Support\Enums\Alignment::Left => 'justify-start text-left',
                                \Filament\Support\Enums\Alignment::Right => 'justify-end text-right',
                                \Filament\Support\Enums\Alignment::Justify => 'justify-between text-justify',
                                default => $alignment,
                            },
                        ]);
                    ?>
                    <!--[if BLOCK]><![endif]--><?php if($column->hasSum()): ?>
                        <?php if (isset($component)) { $__componentOriginalca1389cfce311448447d0904f7976dab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca1389cfce311448447d0904f7976dab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.cell','data' => ['class' => ''.e($columnClasses).'','style' => '
                                padding-left: 8px;
                                padding-right: 8px;
                                padding-top: 4px;
                                padding-bottom: 4px;
                                border-bottom: 1px solid #aaa;
                                border-top: 1px solid #aaa;
                                font-weight: bold;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ''.e($columnClasses).'','style' => '
                                padding-left: 8px;
                                padding-right: 8px;
                                padding-top: 4px;
                                padding-bottom: 4px;
                                border-bottom: 1px solid #aaa;
                                border-top: 1px solid #aaa;
                                font-weight: bold;']); ?>
                            <span style="
                            font-size: 12px;
                        ">
                            <?php echo e($column->formatState($data->sum($column->getName()))); ?>

                            </span>
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
                    <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginalca1389cfce311448447d0904f7976dab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca1389cfce311448447d0904f7976dab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-reports::components.table.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-reports::table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
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
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3554959944aaa14378233760a7596045)): ?>
<?php $attributes = $__attributesOriginal3554959944aaa14378233760a7596045; ?>
<?php unset($__attributesOriginal3554959944aaa14378233760a7596045); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3554959944aaa14378233760a7596045)): ?>
<?php $component = $__componentOriginal3554959944aaa14378233760a7596045; ?>
<?php unset($__componentOriginal3554959944aaa14378233760a7596045); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
<?php /**PATH C:\Users\Anas\system-manager\vendor\eightynine\filament-reports\src\/../resources/views/components/body/table.blade.php ENDPATH**/ ?>