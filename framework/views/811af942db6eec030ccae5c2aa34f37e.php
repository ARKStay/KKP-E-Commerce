<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white">
        <ul class="space-y-2">
            <li>
                <?php if (isset($component)) { $__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.side-link','data' => ['href' => '/dashboard','active' => request()->is('dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.side-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/dashboard','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('dashboard'))]); ?>Dashboard <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa)): ?>
<?php $attributes = $__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa; ?>
<?php unset($__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa)): ?>
<?php $component = $__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa; ?>
<?php unset($__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa); ?>
<?php endif; ?>
            </li>
            <li>
                <?php if (isset($component)) { $__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.side-link','data' => ['href' => '/dashboard/banners','active' => request()->is('dashboard/banners*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.side-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/dashboard/banners','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('dashboard/banners*'))]); ?>
                    Banners
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa)): ?>
<?php $attributes = $__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa; ?>
<?php unset($__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa)): ?>
<?php $component = $__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa; ?>
<?php unset($__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa); ?>
<?php endif; ?>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-medium">E-commerce</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-example"
                    class="<?php echo e(request()->is('dashboard/products*', 'dashboard/categories*', 'dashboard/sizes*') ? '' : 'hidden'); ?> py-2 space-y-2">
                    <li>
                        <?php if (isset($component)) { $__componentOriginal19266b95a884a843b706d9d9c10477fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19266b95a884a843b706d9d9c10477fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.side-link2','data' => ['href' => '/dashboard/products','active' => request()->is('dashboard/products*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.side-link2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/dashboard/products','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('dashboard/products*'))]); ?>
                            Products
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19266b95a884a843b706d9d9c10477fb)): ?>
<?php $attributes = $__attributesOriginal19266b95a884a843b706d9d9c10477fb; ?>
<?php unset($__attributesOriginal19266b95a884a843b706d9d9c10477fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19266b95a884a843b706d9d9c10477fb)): ?>
<?php $component = $__componentOriginal19266b95a884a843b706d9d9c10477fb; ?>
<?php unset($__componentOriginal19266b95a884a843b706d9d9c10477fb); ?>
<?php endif; ?>
                    </li>
                    <li>
                        <?php if (isset($component)) { $__componentOriginal19266b95a884a843b706d9d9c10477fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19266b95a884a843b706d9d9c10477fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.side-link2','data' => ['href' => '/dashboard/categories','active' => request()->is('dashboard/categories*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.side-link2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/dashboard/categories','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('dashboard/categories*'))]); ?>
                            Categories
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19266b95a884a843b706d9d9c10477fb)): ?>
<?php $attributes = $__attributesOriginal19266b95a884a843b706d9d9c10477fb; ?>
<?php unset($__attributesOriginal19266b95a884a843b706d9d9c10477fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19266b95a884a843b706d9d9c10477fb)): ?>
<?php $component = $__componentOriginal19266b95a884a843b706d9d9c10477fb; ?>
<?php unset($__componentOriginal19266b95a884a843b706d9d9c10477fb); ?>
<?php endif; ?>
                    </li>
                    <li>
                        <?php if (isset($component)) { $__componentOriginal19266b95a884a843b706d9d9c10477fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19266b95a884a843b706d9d9c10477fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.side-link2','data' => ['href' => '/dashboard/sizes','active' => request()->is('dashboard/sizes*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.side-link2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/dashboard/sizes','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('dashboard/sizes*'))]); ?>
                            Sizes
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19266b95a884a843b706d9d9c10477fb)): ?>
<?php $attributes = $__attributesOriginal19266b95a884a843b706d9d9c10477fb; ?>
<?php unset($__attributesOriginal19266b95a884a843b706d9d9c10477fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19266b95a884a843b706d9d9c10477fb)): ?>
<?php $component = $__componentOriginal19266b95a884a843b706d9d9c10477fb; ?>
<?php unset($__componentOriginal19266b95a884a843b706d9d9c10477fb); ?>
<?php endif; ?>
                    </li>
                </ul>
            </li>
            <li>
                <?php if (isset($component)) { $__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.side-link','data' => ['href' => '/dashboard/payments','active' => request()->is('dashboard/payments*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.side-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/dashboard/payments','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('dashboard/payments*'))]); ?>Payment Confirmation <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa)): ?>
<?php $attributes = $__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa; ?>
<?php unset($__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa)): ?>
<?php $component = $__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa; ?>
<?php unset($__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa); ?>
<?php endif; ?>
            </li>
            <li>
                <?php if (isset($component)) { $__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.side-link','data' => ['href' => '/dashboard/users','active' => request()->is('dashboard/users')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.side-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/dashboard/users','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('dashboard/users'))]); ?>Users <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa)): ?>
<?php $attributes = $__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa; ?>
<?php unset($__attributesOriginal480e5d5deecbd514d3b28c75ad9e6efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa)): ?>
<?php $component = $__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa; ?>
<?php unset($__componentOriginal480e5d5deecbd514d3b28c75ad9e6efa); ?>
<?php endif; ?>
            </li>
        </ul>
        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200">
            <li>
                <form action="/logout" method="post">
                    <?php echo csrf_field(); ?>
                    <button type="submit"
                        class="flex items-center pl-2 pr-32 py-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg aria-hidden="true"
                            class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                        </svg>
                        <span class="ml-3">Log Out</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>
<?php /**PATH C:\laragon\www\projek-kkp\resources\views/components/dashboard/sidebar.blade.php ENDPATH**/ ?>