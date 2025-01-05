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
     <?php $__env->slot('title', null, []); ?> Payment and Proof Submission <?php $__env->endSlot(); ?>

    <section class="py-8 bg-white dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Display Cart Items -->
            <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                <thead>
                    <tr class="text-sm font-medium text-gray-900 dark:text-white">
                        <th class="p-4 text-left">No</th>
                        <th class="p-4 text-left">Product</th>
                        <th class="p-4 text-left">Price</th>
                        <th class="p-4 text-left">Quantity</th>
                        <th class="p-4 text-left">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-sm text-gray-900 dark:text-white">
                            <td class="p-4"><?php echo e($index + 1); ?></td>
                            <td class="p-4 flex items-center space-x-4">
                                <!-- Product Image -->
                                <div class="w-16 h-16 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                    <img src="<?php echo e(asset('storage/' . $item->product->image)); ?>"
                                        alt="<?php echo e($item->product->name); ?>" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h2 class="font-medium"><?php echo e($item->product->name); ?></h2>
                                </div>
                            </td>
                            <td class="p-4">Rp<?php echo e(number_format($item->product->price, 0, ',', '.')); ?></td>
                            <td class="p-4"><?php echo e($item->quantity); ?></td>
                            <td class="p-4">Rp<?php echo e(number_format($item->price, 0, ',', '.')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <!-- Total Payment -->
            <div class="mt-8 p-4 border rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-bold text-gray-900 dark:text-white">Total Price</h2>
                    <p class="text-xl font-bold text-gray-900 dark:text-white">
                        Rp<?php echo e(number_format($cart->price, 0, ',', '.')); ?></p>
                </div>
            </div>

            <!-- Payment Instructions -->
            <div class="mt-8">
                <p class="font-semibold text-gray-900 dark:text-white">Please transfer to the following account</p>
                <!-- List of Banks -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                    <?php $__currentLoopData = [
                        'BRI' => 'bri-logo.png',
                        'Mandiri' => 'mandiri-logo.png',
                        'BCA' => 'bca-logo.png',
                    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank => $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center p-4 bg-gray-100 dark:bg-gray-800 rounded-lg shadow">
                            <!-- Bank Icon -->
                            <img src="<?php echo e(asset('storage/banks/' . $icon)); ?>" alt="<?php echo e($bank); ?> Logo"
                                class="w-16 h-16 object-contain mr-4">
                            <!-- Bank Details -->
                            <div>
                                <h2 class="text-lg font-semibold text-gray-900 dark:text-white"><?php echo e($bank); ?></h2>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Account Number: <br><strong>123456789</strong>
                                </p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Account Name: <br><strong>Al Hakim Store</strong>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Shipping Options -->
            <div class="mt-8">
                <h2 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Shipping Options</h2>
                <form method="POST" action="<?php echo e(route('user.payment')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <label for="shipping" class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">
                        Choose shipping method:</label>
                    <select id="shipping" name="shipping"
                        class="block mt-1 p-2 border rounded-lg dark:bg-gray-800 dark:text-gray-400 mb-6">
                        <option value="JNE">JNE</option>
                        <option value="POS">POS Indonesia</option>
                        <option value="TIKI">TIKI</option>
                        <option value="J&T">J&T</option>
                        <option value="Sicepat">Sicepat</option>
                    </select>

                    <!-- Payment Proof -->
                    <div class="mt-8">
                        <p class="font-semibold text-gray-900 dark:text-white mb-2">Upload Payment Proof</p>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="file_input_help" id="image" type="file" name="image"
                            onchange="previewImage()" required>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG (MAX.
                            30MB).</p>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-300"><strong>*Note:</strong> Image should be
                            clear and of good quality.</p>
                    </div>

                    <!-- Confirm Payment Button -->
                    <button type="submit"
                        class="mt-6 px-6 py-3 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                        Confirm Payment
                    </button>
                </form>
            </div>
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
<?php /**PATH C:\laragon\www\projek-kkp\resources\views/user/payment/index.blade.php ENDPATH**/ ?>