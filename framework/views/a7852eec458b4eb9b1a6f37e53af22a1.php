<?php if (isset($component)) { $__componentOriginalf2b16bc3883246ba4659aff94e382522 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf2b16bc3883246ba4659aff94e382522 = $attributes; } ?>
<?php $component = App\View\Components\Layouts\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layouts\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>

    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">

        <!-- Search Form -->
        <form class="max-w-md mx-auto mb-5">
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="search" placeholder="Search products..." name="search" autocomplete="off"
                    value="<?php echo e(request('search')); ?>"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>

        <!-- Product Grid -->
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="relative rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                    <!-- Category Tag -->
                    <a href="/category/<?php echo e($product->category->slug ?? '#'); ?>"
                        class="absolute -top-2 -left-2 z-10 inline-block rounded-lg bg-blue-500 px-3 py-1 text-xs font-medium text-white shadow-lg hover:bg-blue-600">
                        <?php echo e($product->category->name ?? 'Uncategorized'); ?>

                    </a>
                    <div class="h-56 w-full">
                        <a href="<?php echo e(route('products.detail', $product->slug)); ?>">
                            <?php if($product->image): ?>
                                <img class="mx-auto h-full object-cover rounded"
                                    src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>">
                            <?php else: ?>
                                <div class="h-56 w-full flex items-center justify-center bg-gray-100 text-gray-500">
                                    <p>No image available</p>
                                </div>
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="pt-6">
                        <a href="<?php echo e(route('products.detail', $product->slug)); ?>" class="text-lg font-semibold leading-tight text-gray-900 hover:underline">
                            <?php echo e($product->name); ?>

                        </a>
                        <div class="mt-2 text-sm text-gray-500">
                            <p><span class="font-medium text-gray-700">Color:</span> <?php echo e($product->color ?? 'No Color'); ?>

                            </p>
                        </div>
                        <div class="mt-2 flex items-center justify-between">
                            <p class="text-2xl font-extrabold text-gray-900">
                                Rp<?php echo e(number_format($product->price, 0, ',', '.')); ?></p>
                            <p class="text-sm text-gray-500">Size: <?php echo e($product->sizes->name ?? '-'); ?></p>
                        </div>
                        <div class="mt-4">
                            <a href="<?php echo e(route('products.detail', $product->slug)); ?>"
                                class="inline-flex items-center bg-blue-600 text-white px-5 py-2.5 rounded-lg hover:bg-blue-700">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-full text-center py-10 my-10">
                    <p class="text-lg font-semibold text-gray-500">No products available at the moment.</p>
                </div>
            <?php endif; ?>
        </div>


    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf2b16bc3883246ba4659aff94e382522)): ?>
<?php $attributes = $__attributesOriginalf2b16bc3883246ba4659aff94e382522; ?>
<?php unset($__attributesOriginalf2b16bc3883246ba4659aff94e382522); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf2b16bc3883246ba4659aff94e382522)): ?>
<?php $component = $__componentOriginalf2b16bc3883246ba4659aff94e382522; ?>
<?php unset($__componentOriginalf2b16bc3883246ba4659aff94e382522); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\projek-kkp\resources\views/products.blade.php ENDPATH**/ ?>