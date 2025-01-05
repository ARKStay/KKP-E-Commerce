<nav class="bg-gray-800" x-data="{ isOpen: false, cartOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo and Desktop Links -->
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company">
                </div>
                <!-- Desktop Navigation Links -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <?php if(auth()->guard()->check()): ?>
                            <?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['href' => '/user','active' => request()->is('user')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/user','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('user'))]); ?>Home <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['href' => '/user/products','active' => request()->is('user/products')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/user/products','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('user/products'))]); ?>Product <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['href' => '/user/about','active' => request()->is('user/about')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/user/about','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('user/about'))]); ?>About <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['href' => '/user/contact','active' => request()->is('user/contact')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/user/contact','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('user/contact'))]); ?>Contact <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
                        <?php else: ?>
                            <?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['href' => '/','active' => request()->is('/')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('/'))]); ?>Home <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['href' => '/products','active' => request()->is('products')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/products','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('products'))]); ?>Product <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['href' => '/about','active' => request()->is('about')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/about','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('about'))]); ?>About <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['href' => '/contact','active' => request()->is('contact')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/contact','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('contact'))]); ?>Contact <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Right Side Actions -->
            <div class="hidden md:flex items-center space-x-6"> <!-- Added space-x-6 for spacing -->
                <?php if(auth()->guard()->guest()): ?>
                    <a href="/login"
                        class="flex items-center bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600 transition duration-200 ease-in-out">
                        <svg class="w-6 h-6 mr-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                        </svg>
                        Login
                    </a>
                <?php endif; ?>

                <?php if(auth()->guard()->check()): ?>
                    <!-- Cart Link -->
                    <div class="relative flex items-center">
                        <a href="<?php echo e(route('user.cart')); ?>"
                            class="flex items-center text-gray-300 hover:text-white space-x-2 hover:bg-gray-700 px-2 py-2 rounded-lg">
                            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                        </a>
                        <?php
                            $maincart = \App\Models\Cart::where('user_id', Auth::user()->id)
                                ->where('status', 'pending')
                                ->first();
                            $cartcount = $maincart
                                ? \App\Models\Cart_Item::where('cart_id', $maincart->id)->count()
                                : 0;
                        ?>
                        <?php if($cartcount > 0): ?>
                            <span
                                class="absolute top-0 right-0 -mt-2 -mr-2 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-red-500 rounded-full">
                                <?php echo e($cartcount); ?>

                            </span>
                        <?php endif; ?>
                    </div>

                    <!-- Profile Dropdown -->
                    <div class="relative">
                        <div @click="isOpen = !isOpen"
                            class="flex items-center cursor-pointer text-gray-300 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>

                        <div x-show="isOpen" @click.away="isOpen = false"
                            class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg dark:bg-gray-700">
                            <a href="/user/profile"
                                class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">My
                                Profile</a>
                            <form action="/logout" method="post" class="block">
                                <?php echo csrf_field(); ?>
                                <button type="submit"
                                    class="w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">Logout</button>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Hamburger Menu for Mobile -->
            <div class="-mr-2 flex md:hidden">
                <button @click="isOpen = !isOpen"
                    class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white">
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="isOpen" class="md:hidden">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <?php if(auth()->guard()->check()): ?>
                <?php if (isset($component)) { $__componentOriginale0405f90339664083e5bc5930c291927 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0405f90339664083e5bc5930c291927 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link-m','data' => ['href' => '/user','active' => request()->is('user')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link-m'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/user','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('user'))]); ?>Home <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $attributes = $__attributesOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__attributesOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $component = $__componentOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__componentOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginale0405f90339664083e5bc5930c291927 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0405f90339664083e5bc5930c291927 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link-m','data' => ['href' => '/user/products','active' => request()->is('user/products')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link-m'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/user/products','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('user/products'))]); ?>Product <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $attributes = $__attributesOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__attributesOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $component = $__componentOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__componentOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginale0405f90339664083e5bc5930c291927 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0405f90339664083e5bc5930c291927 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link-m','data' => ['href' => '/user/about','active' => request()->is('user/about')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link-m'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/user/about','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('user/about'))]); ?>About <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $attributes = $__attributesOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__attributesOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $component = $__componentOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__componentOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginale0405f90339664083e5bc5930c291927 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0405f90339664083e5bc5930c291927 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link-m','data' => ['href' => '/user/contact','active' => request()->is('user/contact')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link-m'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/user/contact','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('user/contact'))]); ?>Contact <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $attributes = $__attributesOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__attributesOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $component = $__componentOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__componentOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginale0405f90339664083e5bc5930c291927 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0405f90339664083e5bc5930c291927 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link-m','data' => ['href' => '/','active' => request()->is('/')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link-m'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('/'))]); ?>Home <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $attributes = $__attributesOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__attributesOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $component = $__componentOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__componentOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginale0405f90339664083e5bc5930c291927 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0405f90339664083e5bc5930c291927 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link-m','data' => ['href' => '/products','active' => request()->is('products')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link-m'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/products','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('products'))]); ?>Product <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $attributes = $__attributesOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__attributesOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $component = $__componentOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__componentOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginale0405f90339664083e5bc5930c291927 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0405f90339664083e5bc5930c291927 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link-m','data' => ['href' => '/about','active' => request()->is('about')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link-m'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/about','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('about'))]); ?>About <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $attributes = $__attributesOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__attributesOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $component = $__componentOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__componentOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginale0405f90339664083e5bc5930c291927 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0405f90339664083e5bc5930c291927 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link-m','data' => ['href' => '/contact','active' => request()->is('contact')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link-m'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/contact','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('contact'))]); ?>Contact <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $attributes = $__attributesOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__attributesOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0405f90339664083e5bc5930c291927)): ?>
<?php $component = $__componentOriginale0405f90339664083e5bc5930c291927; ?>
<?php unset($__componentOriginale0405f90339664083e5bc5930c291927); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <?php if(auth()->guard()->guest()): ?>
                    <a href="/login"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                    <!-- Mobile Cart Link -->
                    <a href="<?php echo e(route('user.cart')); ?>"
                        class="flex items-center text-gray-300 hover:text-white space-x-2 hover:bg-gray-700 px-3 py-2 rounded-md">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18M6 6h12M5 6l1 12h12l1-12H5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 9l3 3-3 3" />
                        </svg>
                    </a>

                    <a href="/user/profile"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Profile</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\laragon\www\projek-kkp\resources\views/components/layouts/navbar.blade.php ENDPATH**/ ?>