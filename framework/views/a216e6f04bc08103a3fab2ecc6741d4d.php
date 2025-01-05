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
    <div class="px-4 mx-auto max-w-screen-2xl lg:px-12">
        <div class="relative overflow-hidden bg-white shadow-md sm:rounded-lg">
            <!-- Notification Success -->
            <?php if(session('Success')): ?>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: "<?php echo e(session('Success')); ?>",
                            showConfirmButton: false,
                            timer: 3000,
                            toast: true,
                            position: 'bottom-end'
                        });
                    });
                </script>
            <?php endif; ?>
            <?php if(session('Success2')): ?>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: "<?php echo e(session('Success2')); ?>",
                            showConfirmButton: false,
                            timer: 3000,
                            toast: true,
                            position: 'bottom-end'
                        });
                    });
                </script>
            <?php endif; ?>
            <!-- Notification Error -->
            <?php if($errors->any()): ?>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: "<?php echo e($errors->first('name')); ?>", // Menampilkan pesan error pertama dari validasi
                            showConfirmButton: false,
                            timer: 3000,
                            toast: true,
                            position: 'bottom-end'
                        });
                    });
                </script>
            <?php endif; ?>
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
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor"
                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="search" name="search" value="<?php echo e(request('search')); ?>"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2"
                                placeholder="Search" autocomplete="off">
                        </div>
                        <button type="submit"
                            class="ml-2 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                            Search
                        </button>
                    </form>
                </div>
                <div
                    class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <a href="/dashboard/products/create"
                        class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add Product
                    </a>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                            <th scope="col" class="px-4 py-3">No.</th>
                            <th scope="col" class="px-4 py-3">Image</th>
                            <th scope="col" class="px-4 py-3">Name</th>
                            <th scope="col" class="px-4 py-3">Slug</th>
                            <th scope="col" class="px-4 py-3">Category</th>
                            <th scope="col" class="px-4 py-3">Size</th>
                            <th scope="col" class="px-4 py-3">Color</th>
                            <th scope="col" class="px-4 py-3">Price</th>
                            <th scope="col" class="px-4 py-3">Stock</th>
                            <th scope="col" class="px-4 py-3">Description</th>
                            <th scope="col" class="px-4 py-3 whitespace-nowrap">Last Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="border-b hover:bg-gray-100">
                                <td class="w-4 px-4 py-3 items-center justify-end relative" x-data="{ open: false, dropdownPosition: 'bottom' }"
                                    @click.away="open = false" x-init="() => {
                                        $watch('open', value => {
                                            if (value) {
                                                const rect = $el.getBoundingClientRect();
                                                const windowHeight = window.innerHeight;
                                    
                                                // Cek ruang di bawah elemen
                                                if (rect.bottom + 250 > windowHeight) {
                                                    dropdownPosition = 'top'; // Posisi dropdown di atas jika ruang terbatas di bawah
                                                } else {
                                                    dropdownPosition = 'bottom'; // Jika ada cukup ruang, tampilkan di bawah
                                                }
                                            }
                                        });
                                    }">
                                    <button @click="open = !open"
                                        class="inline-flex items-center text-sm font-medium hover:bg-gray-100 p-1.5 text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div x-show="open" x-transition
                                        :class="{ 'top-full': dropdownPosition === 'bottom', 'bottom-full mb-2': dropdownPosition === 'top' }"
                                        class="z-50 w-44 bg-white rounded divide-y divide-gray-100 shadow absolute left-0">
                                        <ul class="py-1 text-sm" aria-labelledby="dropdown-button-<?php echo e($product->name); ?>">
                                            <li>
                                                <a href="/dashboard/products/<?php echo e($product->slug); ?>/edit"
                                                    class="flex w-full items-center py-2 px-4 hover:bg-gray-100 text-gray-700">
                                                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                    </svg>
                                                    Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/dashboard/products/<?php echo e($product->slug); ?>"
                                                    class="flex w-full items-center py-2 px-4 hover:bg-gray-100 text-gray-700">
                                                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" />
                                                    </svg>
                                                    Preview
                                                </a>
                                            </li>
                                            <li>
                                                <form action="/dashboard/products/<?php echo e($product->slug); ?>" method="POST"
                                                    id="deleteForm-<?php echo e($product->slug); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="button"
                                                        onclick="confirmDelete('<?php echo e($product->slug); ?>')"
                                                        class="flex w-full items-center py-2 px-4 hover:bg-gray-100 text-red-500">
                                                        <svg class="w-4 h-4 mr-2" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>

                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo e($loop->iteration); ?></td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                    <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>"
                                        class="w-16 h-16 object-cover">
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo e(Str::limit($product['name'], 20)); ?></td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo e(Str::limit($product['slug'], 15)); ?></td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo e($product->category ? Str::limit($product->category->name, 20) : '-'); ?>

                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo e($product->sizes ? Str::limit($product->sizes->name, 20) : '-'); ?>

                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo e(Str::limit($product['color'], 20)); ?></td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo e($product->price); ?>

                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo e($product->stock); ?>

                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo e(Str::limit($product['description'], 30)); ?></td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo e($product->updated_at->diffForHumans()); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0 mt-8"
                aria-label="Table navigation">
                <span class="text-sm font-normal text-gray-500">
                    Showing
                    <span class="font-semibold text-gray-900">1-10</span>
                    of
                    <span class="font-semibold text-gray-900">1000</span>
                </span>
                <ul class="inline-flex items-stretch -space-x-px">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="sr-only">Previous</span>
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="z-10 flex items-center justify-center px-3 py-2 text-sm leading-tight border text-primary-600 bg-primary-50 border-primary-300 hover:bg-primary-100 hover:text-primary-700">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">...</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">100</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="sr-only">Next</span>
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
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
<?php /**PATH C:\laragon\www\projek-kkp\resources\views/dashboard/products/index.blade.php ENDPATH**/ ?>