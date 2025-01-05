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
        <!-- Back to Products, Edit, and Delete Buttons -->
        <div class="mb-4 flex justify-between items-center">
            <a href="<?php echo e(route('products.index')); ?>"
                class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Back to Products</a>
            <div class="flex space-x-2">
                <a href="<?php echo e(route('products.edit', $product->slug)); ?>"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Edit</a>
                <form action="/dashboard/products/<?php echo e($product->slug); ?>" method="POST" id="deleteForm-<?php echo e($product->slug); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="button" onclick="confirmDelete('<?php echo e($product->slug); ?>')"
                        class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">
                        Delete
                    </button>
                </form>
            </div>
        </div>

        <!-- Product Details -->
        <div class="flex flex-col md:flex-row md:space-x-6">
            <!-- Product Image -->
            <div class="mb-4 md:mb-0 md:w-1/3 flex items-center justify-center bg-gray-100 rounded-lg h-48">
                <?php if($product->image): ?>
                    <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>"
                        class="w-full h-auto rounded-lg shadow-md">
                <?php else: ?>
                    <div class="flex items-center justify-center w-full h-full">
                        <p class="text-gray-500 text-center">No image available</p>
                    </div>
                <?php endif; ?>
            </div>
            

            <!-- Product Information -->
            <div class="md:w-2/3">
                <!-- Product Name -->
                <h2 class="text-2xl font-bold text-gray-800 mb-2"><?php echo e($product->name); ?></h2>

                <!-- Product Category -->
                <p class="text-gray-600 mb-4"><strong>Category:</strong> <?php echo e($product->category->name); ?></p>

                <!-- Product Price -->
                <p class="text-gray-600 mb-4"><strong>Price:</strong> $<?php echo e(number_format($product->price, 2)); ?></p>

                <!-- Product Stock -->
                <p class="text-gray-600 mb-4"><strong>Stock:</strong> <?php echo e($product->stock); ?></p>

                <!-- Product Size -->
                <p class="text-gray-600 mb-4"><strong>Size:</strong> <?php echo e($product->size->name ?? 'N/A'); ?></p>

                <!-- Product Color -->
                <p class="text-gray-600 mb-4"><strong>Color:</strong> <?php echo e($product->color); ?></p>

                <!-- Product Description -->
                <p class="text-gray-600 mb-4"><strong>Description:</strong> <?php echo $product->description ?? 'No description available.'; ?></p>

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
<?php /**PATH C:\laragon\www\projek-kkp\resources\views/dashboard/Products/show.blade.php ENDPATH**/ ?>