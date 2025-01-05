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
     <?php $__env->slot('title', null, []); ?> Your Cart <?php $__env->endSlot(); ?>
    <?php if(session('success')): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: "<?php echo e(session('success')); ?>",
                    showConfirmButton: false,
                    timer: 3000,
                    toast: true,
                    position: 'bottom-end'
                });
            });
        </script>
    <?php endif; ?>
    <section class="py-8 bg-white dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Shopping Cart</h1>

            <?php if($cart_items && $cart_items->count() > 0): ?>
                <!-- Cart Table -->
                <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    <thead>
                        <tr class="text-sm font-medium text-gray-900 dark:text-white">
                            <th class="p-4 text-left">No</th>
                            <th class="p-4 text-left">Product</th>
                            <th class="p-4 text-left">Price</th>
                            <th class="p-4 text-left">Quantity</th>
                            <th class="p-4 text-left">Total</th>
                            <th class="p-4 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-sm text-gray-900 dark:text-white">
                                <td class="p-4"><?php echo e($index + 1); ?>.</td>
                                <td class="p-4 flex items-center space-x-4">
                                    <!-- Product Image -->
                                    <div class="w-16 h-16 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                        <img src="<?php echo e(asset('storage/' . $cart_item->product->image)); ?>"
                                            alt="<?php echo e($cart_item->product->name); ?>" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h2 class="font-medium"><?php echo e($cart_item->product->name); ?></h2>
                                    </div>
                                </td>
                                <td class="p-4">Rp<?php echo e(number_format($cart_item->product->price, 0, ',', '.')); ?></td>
                                <td class="p-4"><?php echo e($cart_item->quantity); ?></td>
                                <td class="p-4">Rp<?php echo e(number_format($cart_item->price, 0, ',', '.')); ?></td>
                                <td class="p-4">
                                    <form action="<?php echo e(route('user.cart.delete', $cart_item->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="w-8 h-8 text-red-500 hover:text-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <!-- Order Summary -->
                <div class="mt-8 p-4 border rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Order Summary</h2>
                    <div class="flex justify-between">
                        <span class="text-lg font-bold text-gray-900 dark:text-white">Total Price</span>
                        <span class="text-lg font-bold text-gray-900 dark:text-white">
                            Rp<?php echo e(number_format($cart->price, 0, ',', '.')); ?>

                        </span>
                    </div>
                </div>

                <!-- Proceed to Checkout button (only if cart is not empty) -->
                <div class="mt-8 flex justify-between">
                    <a href="/user/products"
                        class="px-4 py-3 text-sm font-medium text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600">Continue
                        Shopping</a>
                    <a href="<?php echo e(url('confirm_check_out')); ?>"
                        class="px-6 py-3 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">Proceed to
                        Checkout</a>
                </div>
            <?php else: ?>
                <!-- Display message when cart is empty -->
                <div class="text-center mt-20">
                    <p class="text-gray-500 dark:text-gray-400">Your cart is empty.</p>
                </div>
                <!-- Only show Continue Shopping button when cart is empty -->
                <div class="mt-8 flex justify-between">
                    <a href="/user/products"
                        class="px-4 py-3 text-sm font-medium text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600">Continue
                        Shopping</a>
                </div>
            <?php endif; ?>
        </div>
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
<?php /**PATH C:\laragon\www\projek-kkp\resources\views/user/cart/index.blade.php ENDPATH**/ ?>