<nav x-data="{ open: false }" class="border-b border-gray-100" style="background-color: #1E272E;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-15xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">


                <!-- Hamburgur Buttom -->
                <button class="inline-flex items-center justify-center rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-200 ease-in-out " onclick="toglenavbar()">
                    <svg class="h-10 w-10" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path : class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path : class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>


                <!-- <div class="navbar__toggle"  id="mobile-menu" onclick="toglenavbar()" viewBox="0 0 24 24">
                    <div class="h-10 w-10" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <span class="bar"></span> <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </div> -->

                <!-- Hamburgur Menu -->

                <div id="mySidenav" class="sidenav">
                    <ul class="nav navbar-nav">

                        @can (Auth::user()->roll === "ผู้จัดการ")
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}" style="font-size:20px">
                                <img src="{{ asset('storage/profile-photos/dashboardw.png') }}" width="30" height="30" alt="" class="d-inline-block align-top">
                                แดชบอร์ด <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        @endcan


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="font-size:20px" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('storage/profile-photos/supply-chainW.png') }}" width="30" height="30" alt="" class="d-inline-block align-top">
                                สินค้า

                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1E272E;">
                                <a class="dropdown-item" href="{{ route('product.index') }}" text style="font-size:20px">ตารางรายการสินค้า</a>
                                <a class="dropdown-item" href="{{ route('product.index') }}" text style="font-size:20px">เชลฟ์</a>
                            </div>

                        </li>


                        @if (Auth::user()->roll === "ผู้จัดการ" or Auth::user()->roll === "ฝ่ายนำสินค้าเข้า" )
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="font-size:20px" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('storage/profile-photos/shopping-listw.png') }}" width="30" height="30" alt="" class="d-inline-block align-top">
                                นำเข้าสินค้า
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1E272E;">
                                <a class="dropdown-item" href="{{ route('ImportProductOrder.index') }}" text style="font-size:20px">เพิ่มรายการสินค้านำเข้า</a>
                                <a class="dropdown-item" href="#" text style="font-size:20px">รายการสินค้านำเข้า</a>
                            </div>

                        </li>
                        @endif


                        @if (Auth::user()->roll === "ผู้จัดการ" or Auth::user()->roll === "ฝ่ายนำสินค้าออก" or Auth::user()->roll === "ฝ่ายดำเนินกับฝ่ายผลิต")
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="font-size:20px" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('storage/profile-photos/notew.png') }}" width="30" height="30" alt="" class="d-inline-block align-top">
                                นำออกสินค้า

                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1E272E;">
                                <a class="dropdown-item" href="#" text style="font-size:20px">เพิ่มรายการสินค้านำเข้า</a>
                                <a class="dropdown-item" href="#" text style="font-size:20px">รายการสินค้านำเข้า</a>
                            </div>

                        </li>
                        @endif

                        @if (Auth::user()->roll === "ผู้จัดการ" or Auth::user()->roll === "ฝ่ายนำสินค้าออก" or Auth::user()->roll === "ฝ่ายดำเนินกับฝ่ายผลิต")
                        <li class="nav-item">
                            <a class="nav-link" style="font-size:20px" href="{{ route('return') }}">
                                <img src="{{ asset('storage/profile-photos/product-return copy.png') }}" width="30" height="30" alt="" class="d-inline-block align-top">

                                คืนสินค้า</a>
                        </li>
                        @endif

                        @if (Auth::user()->roll === "ผู้จัดการ" or Auth::user()->roll === "ฝ่ายจัดการคลังสินค้า" )
                        <li class="nav-item">
                            <a class="nav-link" style="font-size:20px" href="#">
                                <img src="{{ asset('storage/profile-photos/filew.png') }}" width="30" height="30" alt="" class="d-inline-block align-top">
                                ตรวจสอบคลัง</a>
                        </li>
                        @endif

                        @if (Auth::user()->roll === "ผู้จัดการ" or Auth::user()->roll === "ฝ่ายจัดการคลังสินค้า" )
                        <li class="nav-item">
                            <a class="nav-link" style="font-size:20px" href="#">
                                <img src="{{ asset('storage/profile-photos/exclamationw.png') }}" width="30" height="30" alt="" class="d-inline-block align-top class=" d-inline-block align-top"">
                                รายงาน</a>
                        </li>
                        @endif

                    </ul>

                </div>

                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center ml-3">
                    <a href="{{ route('product.index') }}">
                        <img src="{{ asset('storage/profile-photos/logo.png') }}" width="100" height="45" alt="">
                    </a>
                </div>


            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                <h1 class="ml-4" style="color:white">
                                    <p style="font-size:15px">{{ Auth::user()->name}}<br /></p>
                                    <span style="font-size:12px">{{ Auth::user()->roll}}</span>
                                    <h1>
                            </button>


                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    {{ Auth::user()->name }}
                                    {{ Auth::user()->roll }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>

                            </span>

                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            @if (Auth::user()->roll === "ผู้จัดการ")
                            <x-jet-dropdown-link href="{{ route('users.index') }}">
                                {{ __('User Manage') }}
                            </x-jet-dropdown-link>

                            @endif
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>

            </div>



        </div>
    </div>
</nav>