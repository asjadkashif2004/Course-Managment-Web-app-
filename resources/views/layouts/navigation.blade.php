<style>
    nav {
        font-family: 'Segoe UI', sans-serif;
        background: #fdfdfd;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .navbar-links a {
        padding: 8px 12px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }

    .navbar-links a:hover {
        background-color: #f0f4ff;
        color: #2563eb;
    }

    .logo-img {
        height: 40px;
        width: auto;
    }

    .navbar-links {
        gap: 30px; /* Spacing between Dashboard and Courses */
        display: flex;
        align-items: center;
    }

    .space-between-logo-nav {
        margin-left: 20px;
    }
</style>

<nav x-data="{ open: false }" class="bg-white shadow-md border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo Area -->
            <div class="flex items-center">
                <!-- Logo -->
                <a href="{{ route('dashboard') }}">
                    <img src="https://www.freeiconspng.com/uploads/courses-icon-12.png" alt="Logo" class="logo-img">
                </a>

                <!-- Navigation Links -->
                <div class="hidden sm:flex space-between-logo-nav navbar-links text-sm font-semibold text-gray-700">
                    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'text-blue-600' : 'hover:text-blue-500' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('courses.index') }}" class="{{ request()->routeIs('courses.index') ? 'text-blue-600' : 'hover:text-blue-500' }}">
                        Courses
                    </a>
                </div>
            </div>

            <!-- Right Side - Dropdown -->
            <div class="hidden sm:flex items-center space-x-4">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-600 hover:text-gray-800">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Log Out
                                </x-dropdown-link>
                            </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="sm:hidden">
                <button @click="open = ! open" class="p-2 rounded-md text-gray-600 hover:text-gray-900 focus:outline-none focus:bg-gray-100">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{ 'block': open, 'hidden': ! open }" class="sm:hidden">
        <div class="px-4 pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">Dashboard</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('courses.index')" :active="request()->routeIs('courses.index')">Courses</x-responsive-nav-link>
        </div>

        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">Profile</x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link href="{{ route('logout') }}"
                        onclick="event.preventDefault(); this.closest('form').submit();">Log Out</x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
