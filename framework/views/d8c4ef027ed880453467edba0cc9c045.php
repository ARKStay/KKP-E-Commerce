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
        <!-- Notification Delete -->
        <script>
            function confirmDelete(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "This action cannot be undone!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('deleteForm-' + id).submit();
                    }
                });
            }
        </script>
        <!-- Back to Banners, Edit, and Delete Buttons -->
        <div class="mb-4 flex justify-between items-center">
            <a href="<?php echo e(route('banners.index')); ?>"
                class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Back to Banners</a>
            <div class="flex space-x-2">
                <a href="<?php echo e(route('banners.edit', $banner->id)); ?>"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Edit</a>
                <form action="/dashboard/banners/<?php echo e($banner->id); ?>" method="POST" id="deleteForm-<?php echo e($banner->id); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="button" onclick="confirmDelete('<?php echo e($banner->id); ?>')"
                        class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">
                        Delete
                    </button>
                </form>
            </div>
        </div>

        <!-- Banner Details -->
        <div class="flex flex-col md:flex-row md:space-x-6">
            <!-- Banner Image -->
            <div class="mb-4 md:mb-0 md:w-1/3">
                <?php if($banner->image): ?>
                    <img src="<?php echo e(asset('storage/' . $banner->image)); ?>" alt="<?php echo e($banner->image); ?>"
                        class="w-full h-auto rounded-lg shadow-md">
                <?php else: ?>
                    <p class="text-gray-500">No image available.</p>
                <?php endif; ?>
            </div>

            <!-- Banner Information -->
            <div class="md:w-2/3">
                <!-- Banner -->
                <h2 class="text-gray-600 mb-4"><strong>Status:</strong> <?php echo e($banner->status); ?></h2>
            </div>
        </div>
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
<?php /**PATH C:\laragon\www\projek-kkp\resources\views/dashboard/Banners/show.blade.php ENDPATH**/ ?>