<style>
    nav {
        font-family: 'Segoe UI', sans-serif;
        background: #ffffff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
        position: sticky;
        top: 0;
        z-index: 50;
    }

    .navbar-container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 20px;
        height: 64px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo-img {
        height: 40px;
        width: auto;
    }

    .navbar-links {
        display: flex;
        gap: 32px;
        align-items: center;
        font-weight: 500;
    }

    .navbar-links a {
        color: #374151;
        padding: 8px 12px;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .navbar-links a:hover,
    .navbar-links a.active {
        background-color: #f0f4ff;
        color: #1d4ed8;
    }

    .user-menu {
        position: relative;
    }

    .user-button {
        background: none;
        border: none;
        cursor: pointer;
        color: #4b5563;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
    }

    .user-button:hover {
        color: #1f2937;
    }

    .user-button svg {
        transition: transform 0.3s ease;
    }

    .user-menu[open] svg {
        transform: rotate(180deg);
    }

    .user-dropdown {
        position: absolute;
        top: 120%;
        right: 0;
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        min-width: 150px;
        padding: 10px 0;
        z-index: 100;
    }

    .user-dropdown a {
        display: block;
        padding: 10px 16px;
        text-decoration: none;
        color: #374151;
        transition: background-color 0.2s ease;
        font-size: 14px;
    }

    .user-dropdown a:hover {
        background-color: #f3f4f6;
    }

    /* Mobile */
    .mobile-toggle {
        display: none;
        background: none;
        border: none;
    }

    @media (max-width: 768px) {
        .navbar-links,
        .user-menu {
            display: none;
        }

        .mobile-toggle {
            display: block;
        }

        .mobile-menu {
            display: none;
            background-color: #ffffff;
            border-top: 1px solid #e5e7eb;
        }

        .mobile-menu.active {
            display: block;
        }

        .mobile-menu a {
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            color: #374151;
            font-weight: 500;
        }

        .mobile-menu a:hover {
            background-color: #f0f4ff;
        }
    }
</style>

<nav>
    <div class="navbar-container">
        <!-- Logo -->
        <a href="{{ route('dashboard') }}">
            <img src="https://www.freeiconspng.com/uploads/courses-icon-12.png" alt="Logo" class="logo-img">
        </a>

        <!-- Navigation Links -->
        <div class="navbar-links">
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">🏠 Dashboard</a>
            <a href="{{ route('courses.index') }}" class="{{ request()->routeIs('courses.index') ? 'active' : '' }}">📚 Courses</a>
        </div>

        <!-- User Dropdown -->
        <details class="user-menu">
            <summary class="user-button">
                👤 {{ Auth::user()->name }}
                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd" />
                </svg>
            </summary>
            <div class="user-dropdown">
                <a href="{{ route('profile.edit') }}">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                </form>
            </div>
        </details>

        <!-- Mobile Toggle -->
        <button class="mobile-toggle" onclick="document.querySelector('.mobile-menu').classList.toggle('active')">
            <svg class="h-6 w-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    </nav>

