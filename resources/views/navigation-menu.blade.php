<div>
    <nav class="navbar navbar-dark bg-dark fixed-top mb-5">
        <div class="container-fluid">
            <a href="{{ route('/') }}" class="-intro-x hidden md:flex">
                <img alt="#" class="w-6" src="dist/images/1558260216873.jfif">
                <span class="text-white text-lg mr-3 adjust "> اسنپ <span class="font-medium">فود</span> </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-tertiary" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title font-bold" id="offcanvasDarkNavbarLabel">منو</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <!-- BEGIN: Breadcrumb -->
                        <div class="-intro-x breadcrumb ml-auto"><a class="breadcrumb--active"></a></div>
                        <!-- END: Breadcrumb -->
                        <li class="nav-item dropdown">
                            <div class="intro-x dropdown w-8 h-8 mb-4">
                                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110 "
                                    role="button" aria-expanded="false">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <img alt="#" src="dist/images/user.png">
                                    @else
                                        <img alt="#" src="dist/images/profile-19.jpg">
                                    @endif
                                </div>
                                <div class="dropdown-menu w-56">
                                    <div class="dropdown-menu__content box bg-theme-11 dark:bg-dark-6 text-white">
                                        <div class="p-4 border-b border-theme-12 dark:border-dark-3">
                                            <div class="font-medium">{{ Auth::user()->name }}</div>
                                            <div class="text-xs text-theme-13 mt-0.5 dark:text-gray-600">
                                                {{ Auth::user()->email }}
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <a href="{{ route('profile.show') }}"
                                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                                                <i data-feather="user" class="w-4 h-4 ml-2"></i> پروفایل </a>
                                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                <a href="{{ route('api-tokens.index') }}"
                                                    class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                                                    <i data-feather="edit" class="w-4 h-4 ml-2"></i>
                                                    {{ __('توکن شما') }} </a>
                                            @endif
                                            <a href="{{ route('profile.show') }}"
                                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                                                <i data-feather="lock" class="w-4 h-4 ml-2"></i>بازیابی رمزعبور</a>
                                        </div>
                                        <div class="p-2 border-t border-theme-12 dark:border-dark-3">
                                            <form method="POST" action="{{ route('logout') }}" x-data>
                                                @csrf

                                                <a href="{{ route('logout') }}"
                                                    class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"
                                                    @click.prevent="$root.submit();">
                                                    <i data-feather="toggle-right" class="w-4 h-4 ml-2"></i>
                                                    {{ __('خروج') }}
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <br>
                        </li>
                        @role('superadmin')
                            <li>
                                <x-jet-nav-link href="{{ route('Admin') }}" :active="request()->routeIs('Admin')" class="top-menu">

                                    <div class="top-menu__title">داشبورد</div>
                                </x-jet-nav-link>
                            </li>
                            <br>
                            <li>
                                <x-jet-nav-link href="{{ route('restaurantCategory') }}" :active="request()->routeIs('restaurantCategory')"
                                    class="top-menu">

                                    <div class="top-menu__title">رستوران ها</div>
                                </x-jet-nav-link>
                            </li>
                            <br>
                            <li>
                                <x-jet-nav-link href="{{ route('foodCategory') }}" :active="request()->routeIs('foodCategory')" class="top-menu">

                                    <div class="top-menu__title"> غذا ها</div>
                                </x-jet-nav-link>
                            </li>
                            <br>
                            {{--            <li> --}}
                            {{--                <x-jet-nav-link href="{{ route('roles') }}" :active="request()->routeIs('roles')" class="top-menu"> --}}
                            {{--                    <div class="top-menu__icon"><i data-feather="settings" class="block mx-auto"></i></div> --}}
                            {{--                    <div class="top-menu__title"> تنظیمات دسترسی ها</div> --}}
                            {{--                </x-jet-nav-link> --}}
                            {{--            </li>
                                <br> --}}
                            <li>
                                <x-jet-nav-link href="{{ route('DiscountPanel') }}" :active="request()->routeIs('DiscountPanel')" class="top-menu">

                                    <div class="top-menu__title"> تخفیف ها</div>
                                </x-jet-nav-link>
                            </li>
                            <br>
                            <li>
                                <x-jet-nav-link href="{{ route('FoodParty') }}" :active="request()->routeIs('FoodParty')" class="top-menu">

                                    <div class="top-menu__title">فود پارتی</div>
                                </x-jet-nav-link>
                            </li>
                            <br>
                            <li>
                                <x-jet-nav-link href="{{ route('FrontBanner') }}" :active="request()->routeIs('FrontBanner')" class="top-menu">

                                    <div class="top-menu__title"> بنر ها</div>
                                </x-jet-nav-link>
                            </li>
                            <br>

                            <li>
                                <x-jet-nav-link href="{{ route('AllUsers') }}" :active="request()->routeIs('AllUsers')" class="top-menu">

                                    <div class="top-menu__title">کاربران</div>
                                </x-jet-nav-link>
                            </li>
                            <br>
                        @endrole
                        @role('seller')
                            <li>
                                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="top-menu">
                                    {{-- <div class="top-menu__icon"><i data-feather="home"></i></div> --}}
                                    <div class="top-menu__title">داشبورد</div>
                                </x-jet-nav-link>
                            </li>
                            <br>
                            <li>
                                <x-jet-nav-link href="{{ route('RestaurantPanel') }}" :active="request()->routeIs('RestaurantPanel')" class="top-menu">
                                    {{-- <div class="top-menu__icon">
                                            <i data-feather="aperture" class="block mx-auto"></i>
                                        </div> --}}
                                    <div class="top-menu__title"> پروفایل رستوران</div>
                                </x-jet-nav-link>
                            </li>
                            <br>
                            <li>
                                <x-jet-nav-link href="{{ route('FoodPanel') }}" :active="request()->routeIs('FoodPanel')" class="top-menu">
                                    {{-- <div class="top-menu__icon"><i data-feather="coffee" class="block mx-auto"></i></div> --}}
                                    <div class="top-menu__title"> تنظیمات غذاها</div>
                                </x-jet-nav-link>
                            </li>
                            <br>
                            <li>
                                <x-jet-nav-link href="{{ route('OrdersPanel') }}" :active="request()->routeIs('OrdersPanel')" class="top-menu">
                                    {{-- <div class="top-menu__icon"><i data-feather="shopping-cart" class="block mx-auto"></i></div> --}}
                                    <div class="top-menu__title"> سفارش ها</div>
                                </x-jet-nav-link>
                            </li>
                            <br>
                            <li>
                                <x-jet-nav-link href="{{ route('ArchiveOrder') }}" :active="request()->routeIs('ArchiveOrder')" class="top-menu">
                                    {{-- <div class="top-menu__icon"><i data-feather="shopping-cart" class="block mx-auto"></i></div> --}}
                                    <div class="top-menu__title"> آرشیو سفارشات</div>
                                </x-jet-nav-link>
                            </li>
                            <br>
                            <li>
                                <x-jet-nav-link href="{{ route('CommentsPanel') }}" :active="request()->routeIs('CommentsPanel')" class="top-menu">
                                    {{-- <div class="top-menu__icon"><i data-feather="inbox" class="block mx-auto"></i></div> --}}

                                    <div class="top-menu__title"> نظر ها</div>
                                </x-jet-nav-link>
                            </li>
                            <br>
                        @endrole
                    </ul>
                    <div class="intro-x relative ml-3 sm:ml-6">
                        <div class="search hidden sm:block">
                            <input type="text"
                                class="search__input form-control dark:bg-dark-1 border-transparent placeholder-theme-8"
                                placeholder="جستجو...">
                            <i data-feather="search" class="search__icon dark:text-gray-300"></i>
                        </div>
                        <a class="notification sm:hidden" href=""> <i data-feather="search"
                                class="notification__icon dark:text-gray-300"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
