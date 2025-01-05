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
    <?php if(session('success')): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: "<?php echo e(session('success')); ?>",
                    showConfirmButton: false,
                    timer: 5000,
                    position: 'mid'
                });
            });
        </script>
    <?php endif; ?>
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <!-- Carousel -->
        <div class="relative w-full mx-auto overflow-hidden rounded-lg mb-8" x-data="{ currentSlide: 0, interval: null }"
            x-init="interval = setInterval(() => { currentSlide = (currentSlide + 1) % <?php echo e(count($banners)); ?> }, 5000);">
            <!-- Slides -->
            <div class="flex transition-transform duration-700 ease-out"
                :style="'transform: translateX(-' + (currentSlide * 100) + '%);'">
                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="w-full flex-shrink-0">
                        <?php if($banner->image): ?>
                            <!-- Gunakan aspect ratio 16:9 -->
                            <div class="w-full aspect-[16/9]">
                                <img src="<?php echo e(asset('storage/' . $banner->image)); ?>"
                                    class="w-full h-full object-cover rounded-lg" alt="Banner Image">
                            </div>
                        <?php else: ?>
                            <!-- Placeholder jika tidak ada gambar -->
                            <div
                                class="w-full aspect-[16/9] flex items-center justify-center bg-gray-200 text-gray-500 rounded-lg">
                                <p>No image available</p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Navigation Arrows -->
            <button @click="currentSlide = (currentSlide - 1 + <?php echo e(count($banners)); ?>) % <?php echo e(count($banners)); ?>"
                class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-800/50 text-white p-2 rounded-full hover:bg-gray-800/70">
                &#10094;
            </button>
            <button @click="currentSlide = (currentSlide + 1) % <?php echo e(count($banners)); ?>"
                class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-800/50 text-white p-2 rounded-full hover:bg-gray-800/70">
                &#10095;
            </button>

            <!-- Indicators -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button @click="currentSlide = <?php echo e($index); ?>"
                        :class="{
                            'bg-white': currentSlide === <?php echo e($index); ?>,
                            'bg-gray-500': currentSlide !== <?php echo e($index); ?>

                        }"
                        class="h-3 w-3 rounded-full"></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <!-- Products Section -->
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <?php $__currentLoopData = $products->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="relative rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                    <!-- Category Tag -->
                    <a href="/category/<?php echo e($product->category->slug ?? '#'); ?>"
                        class="absolute -top-2 -left-2 z-10 inline-block rounded-lg bg-blue-500 px-3 py-1 text-xs font-medium text-white shadow-lg hover:bg-blue-600">
                        <?php echo e($product->category->name ?? 'Uncategorized'); ?>

                    </a>
                    <div class="h-56 w-full">
                        <a href="<?php echo e(route('user.products.detail', $product->slug)); ?>">
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
                        <a href="<?php echo e(route('user.products.detail', $product->slug)); ?>"
                            class="text-lg font-semibold leading-tight text-gray-900 hover:underline">
                            <?php echo e($product->name); ?>

                        </a>
                        <div class="mt-2 text-sm text-gray-500">
                            <p><span class="font-medium text-gray-700">Color:</span>
                                <?php echo e($product->color ?? 'No Color'); ?></p>
                        </div>
                        <div class="mt-2 flex items-center justify-between">
                            <p class="text-2xl font-extrabold text-gray-900">
                                Rp<?php echo e(number_format($product->price, 0, ',', '.')); ?></p>
                            <p class="text-sm text-gray-500">Size: <?php echo e($product->sizes->name ?? '-'); ?></p>
                        </div>
                        <div class="mt-4">
                            <a href="<?php echo e(route('user.products.detail', $product->slug)); ?>"
                                class="inline-flex items-center bg-blue-600 text-white px-5 py-2.5 rounded-lg hover:bg-blue-700">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Tombol Show More -->
        <div class="mt-6 flex justify-center">
            <a href="/user/products"
                class="rounded-lg border border-gray-700 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 
        hover:bg-gray-100 hover:text-blue-700 hover:border-blue-700 focus:outline-none focus:ring-4 focus:ring-gray-200">
                Show more
            </a>
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
<?php /**PATH C:\laragon\www\projek-kkp\resources\views/user/index.blade.php ENDPATH**/ ?>