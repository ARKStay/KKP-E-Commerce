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

    <div class="p-6 bg-white rounded-lg shadow-md">
        <!-- Form -->
        <form action="<?php echo e(route('sizes.update', $size->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Size Name</label>
                <input type="text" name="name" id="name" value="<?php echo e(old('name', $size->name)); ?>"
                    class="mt-1 block w-96 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required autocomplete="off">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-sm text-red-600 mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Buttons -->
            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Update Size
                </button>
                <a href="<?php echo e(route('categories.index')); ?>"
                    class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
                    Back to Table
                </a>
            </div>
        </form>
    </div>
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
<?php /**PATH C:\laragon\www\projek-kkp\resources\views/dashboard/Sizes/edit.blade.php ENDPATH**/ ?>