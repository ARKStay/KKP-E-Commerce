<?php if (isset($component)) { $__componentOriginalb998c89882eab8e1df2af93927d4d429 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb998c89882eab8e1df2af93927d4d429 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Dashboard\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb998c89882eab8e1df2af93927d4d429)): ?>
<?php $attributes = $__attributesOriginalb998c89882eab8e1df2af93927d4d429; ?>
<?php unset($__attributesOriginalb998c89882eab8e1df2af93927d4d429); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb998c89882eab8e1df2af93927d4d429)): ?>
<?php $component = $__componentOriginalb998c89882eab8e1df2af93927d4d429; ?>
<?php unset($__componentOriginalb998c89882eab8e1df2af93927d4d429); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\projek-kkp\resources\views/dashboard/index.blade.php ENDPATH**/ ?>