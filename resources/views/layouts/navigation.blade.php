<link rel="stylesheet" type="text/css" href="artisan/vendors/styles/core.css" />
<link rel="stylesheet" type="text/css" href="artisan/vendors/styles/icon-font.min.css" />
<link rel="stylesheet" type="text/css" href="artisan/vendors/styles/style.css" />
<style>
body {
    /*background-color: rgb(251, 245, 236)*/


margin: auto;
padding: auto;
background: url('artisan/vendors/images/site.png') no-repeat center center fixed;
background-size: cover;
}
</style>
<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">

                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                </div>

            </div>

            <!-- Settings Dropdown -->
            <div>
                <!-- Settings Dropdown -->
<div>
    <x-dropdown align="center" >
        <x-slot name="trigger">
            <style>
                .custom-button {
                    display: inline-block;
                    padding: 10px 20px; /* Adjust padding for the button size */
                    font-weight: bold;
                    border: 2px solid  linear-gradient(to right, #c1c161 0%, #c1c161 0%, #d4d4b1 100%);
                    border-radius: 25px; /* Adjust border-radius for rounded corners */
                    font-size: 16px; /* Adjust text size */
                    background-color:transparent;
                    color: #fff;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                    text-decoration: none;
                }


                .custom-button:hover {
                    background-color :#fcf0e7;
                }
                .icon-copy{
                    color: #000;
                }
            </style>
            <label class="custom-button" >
                @if (Auth::check())
                <a href="{{ url('/redirect') }}" style="color: #980600">
                    {{ Auth::user()->name }}

                </a>
                <i class="icon-copy bi bi-caret-down-fill" style="color: #fff"></i>
                @else
                    <div>User is not authenticated</div>
                @endif
            </label>
        </x-slot>

        <x-slot name="content">
            <style>
                .dark-dropdown-item {
                    background-color: transparent;/* Change this to your desired dark color */
                    color: #000 ;/* Change this to the desired text color */
                }
            </style>

            <x-dropdown-link :href="url('/redirect')" class="dark-dropdown-item">
                <i class="icon-copy fa fa-dashboard" aria-hidden="true"></i>
                {{ __('Dashboard') }}
            </x-dropdown-link>
            <x-dropdown-link :href="url('/')" class="dark-dropdown-item">
                <i class="icon-copy dw dw-home"></i>&nbsp;
                {{ __('Home') }}
            </x-dropdown-link>
            <x-dropdown-link :href="route('profile.edit')" class="dark-dropdown-item">
                <i class="icon-copy dw dw-user1"></i>&nbsp;
                {{ __('Profile') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf


                <x-dropdown-link :href="route('logout')" class="dark-dropdown-item"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="icon-copy dw dw-logout1"></i>&nbsp;
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</div>

            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <label @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </label>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="icon-copy fa fa-dashboard" aria-hidden="true"></i>&nbsp;
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div>
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <i class="icon-copy dw dw-user1"></i>&nbsp;
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <i class="icon-copy dw dw-logout1"></i>&nbsp;
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
