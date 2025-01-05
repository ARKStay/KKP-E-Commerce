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
     <?php $__env->slot('title', null, []); ?> Product Details <?php $__env->endSlot(); ?>
    <section class="py-8 bg-white md:py-16 dark:bg-gray-900 antialiased">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <!-- Back to Products Button -->
            <div class="mb-4">
                <a href="<?php echo e(url()->previous() !== url()->current() ? url()->previous() : '/user/'); ?>"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 border border-gray-300 rounded-lg hover:bg-gray-300 dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600">
                    ← Back to Products
                </a>
            </div>

            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <!-- Product Image -->
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    <?php if($product->image): ?>
                        <img class="w-full" src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" />
                    <?php else: ?>
                        <div class="w-full h-64 bg-gray-100 flex items-center justify-center text-gray-500">
                            <p>No image available</p>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Product Details -->
                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <!-- Category Tag -->
                    <div class="mb-3">
                        <a href="/category/<?php echo e($product->category->slug ?? '#'); ?>"
                            class="inline-block bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-900">
                            <?php echo e($product->category->name ?? 'Uncategorized'); ?>

                        </a>
                    </div>

                    <!-- Product Title -->
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                        <?php echo e($product->name); ?>

                    </h1>

                    <!-- Product Price -->
                    <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                        <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                            Rp<?php echo e(number_format($product->price, 0, ',', '.')); ?>

                        </p>
                    </div>

                    <!-- Buttons -->
                    <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                        <?php if(auth()->guard()->check()): ?>
                            <form action="<?php echo e(url('user/detail')); ?>/<?php echo e($product->slug); ?>" method="POST"
                                class="flex space-x-4">
                                <?php echo csrf_field(); ?>
                                <!-- Input Quantity -->
                                <div>
                                    <label for="quantity" class="sr-only">Quantity</label>
                                    <input type="number" name="quantity" id="quantity" min="1"
                                        max="<?php echo e($product->stock); ?>" value="1" required
                                        class="w-20 text-center border-gray-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:focus:ring-primary-500">
                                </div>

                                <!-- Input Hidden Product ID -->
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">

                                <!-- Add to Cart Button -->
                                <button type="submit"
                                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center">
                                    Add to Cart
                                </button>
                            </form>


                            <a href="#"
                                class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800 flex items-center justify-center">
                                Buy Now
                            </a>
                        <?php else: ?>
                            <p class="text-gray-700 dark:text-gray-300">Please <a href="/login"
                                    class="text-primary-600 hover:underline">login</a> to add items to your cart or buy
                                products.</p>
                        <?php endif; ?>
                    </div>

                    <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                    <!-- Product Information Table -->
                    <div class="mt-6">
                        <table class="min-w-full border border-gray-300 rounded-lg text-gray-700 dark:text-gray-300">
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 font-medium">Color</td>
                                    <td class="py-2 px-4"><?php echo e($product->color ?? 'Not available'); ?></td>
                                </tr>
                                <tr class="bg-gray-100 dark:bg-gray-800">
                                    <td class="py-2 px-4 font-medium">Size</td>
                                    <td class="py-2 px-4"><?php echo e($product->sizes->name ?? 'Not available'); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 font-medium">Stock</td>
                                    <td class="py-2 px-4"><?php echo e($product->stock); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Product Description -->
                    <div class="mt-6">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Product Description</h2>
                        <div class="mt-4 text-gray-500 dark:text-gray-400 prose dark:prose-invert">
                            <?php echo $product->description; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </section>
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
<?php /**PATH C:\laragon\www\projek-kkp\resources\views/user/detail.blade.php ENDPATH**/ ?>