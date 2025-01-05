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

    <!-- Notification Success -->
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

    <!-- Notification Info -->
    <?php if(session('info')): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'info',
                    title: 'Heads up!',
                    text: "<?php echo e(session('info1')); ?>",
                    showConfirmButton: true,
                    position: 'mid'
                });
            });
        </script>
    <?php endif; ?>

    <div class="max-w-screen-md w-full px-4 mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
        <!-- Back to Dashboard Button -->
        <div class="mb-4">
            <a href="/user"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 border border-gray-300 rounded-lg hover:bg-gray-300 dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600">
                ← Back to Dashboard
            </a>
        </div>

        <!-- Page Title -->
        <h2 class="text-2xl font-semibold mb-6 text-center">User Profile</h2>

        <!-- Profile Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full text-left border-collapse border border-gray-300 dark:border-gray-700">
                <tbody>
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-4 py-2 bg-gray-100 dark:bg-gray-700 dark:text-gray-300">Name</th>
                        <td class="px-4 py-2"><?php echo e(auth()->user()->name); ?></td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-4 py-2 bg-gray-100 dark:bg-gray-700 dark:text-gray-300">Username</th>
                        <td class="px-4 py-2"><?php echo e(auth()->user()->username); ?></td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-4 py-2 bg-gray-100 dark:bg-gray-700 dark:text-gray-300">Email</th>
                        <td class="px-4 py-2"><?php echo e(auth()->user()->email); ?></td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-4 py-2 bg-gray-100 dark:bg-gray-700 dark:text-gray-300">Password</th>
                        <td class="px-4 py-2"><?php echo e(str_repeat('*', min(strlen(auth()->user()->password), 15))); ?></td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-4 py-2 bg-gray-100 dark:bg-gray-700 dark:text-gray-300">Phone Number</th>
                        <td class="px-4 py-2"><?php echo e(auth()->user()->phone ?? 'Not provided'); ?></td>
                    </tr>
                    <tr>
                        <th class="px-4 py-2 bg-gray-100 dark:bg-gray-700 dark:text-gray-300">Address</th>
                        <td class="px-4 py-2"><?php echo e(auth()->user()->address ?? 'Not provided'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Action Buttons -->
        <div class="flex space-x-4 mt-6 justify-center">
            <a href="<?php echo e(route('profile.edit', ['user' => auth()->user()->id])); ?>"
                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Edit Profile
            </a>

            <form action="<?php echo e(route('profile.destroy', ['user' => auth()->user()->id])); ?>" method="POST"
                id="deleteForm-<?php echo e(auth()->user()->id); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="button" onclick="confirmDelete('<?php echo e(auth()->user()->id); ?>')"
                    class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                    Delete Account
                </button>
            </form>
        </div>
    </div>

    <!-- Notification Delete Confirmation -->
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
<?php /**PATH C:\laragon\www\projek-kkp\resources\views/user/profile.blade.php ENDPATH**/ ?>