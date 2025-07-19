<!-- Sidebar component -->
<div class="flex h-full flex-col bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-700">
    <!-- Sidebar header -->
    <div class="flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 dark:border-gray-700 px-6">
        <div class="flex items-center gap-x-3">
            <div class="h-8 w-8 rounded-lg bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center">
                <x-icons.home class="h-5 w-5 text-white" />
            </div>
            <div class="text-xl font-bold text-gray-900 dark:text-white">
                {{ config('app.name', 'Laravel') }}
            </div>
        </div>

        <!-- Close button for mobile -->
        <button @click="sidebarOpen = false" class="lg:hidden ml-auto p-1.5 text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
            <x-icons.close />
        </button>
    </div>

    <!-- Navigation -->
    <nav class="flex flex-1 flex-col overflow-y-auto px-6 py-6">
        <ul role="list" class="flex flex-1 flex-col gap-y-1">
            <!-- Main Navigation -->
            <li>
                <ul role="list" class="space-y-1">
                    <li>
                        <a href="{{ route('dashboard') }}"
                           class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-700 dark:bg-blue-900/20 dark:text-blue-400' : 'text-gray-700 hover:text-blue-700 hover:bg-gray-50 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-800' }}">
                            <x-icons.dashboard />
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 text-gray-700 hover:text-blue-700 hover:bg-gray-50 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-800">
                            <x-icons.users />
                            Users
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 text-gray-700 hover:text-blue-700 hover:bg-gray-50 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-800">
                            <x-icons.reports />
                            Reports
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 text-gray-700 hover:text-blue-700 hover:bg-gray-50 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-800">
                            <x-icons.analytics />
                            Analytics
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Divider -->
            <li class="my-6">
                <div class="border-t border-gray-200 dark:border-gray-700"></div>
            </li>

            <!-- Secondary Navigation -->
            <li>
                <div class="text-xs font-semibold leading-6 text-gray-400 dark:text-gray-500 uppercase tracking-wide">
                    Account
                </div>
                <ul role="list" class="mt-3 space-y-1">
                    <li>
                        <a href="{{ route('profile.edit') }}"
                           class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('profile.*') ? 'bg-blue-50 text-blue-700 dark:bg-blue-900/20 dark:text-blue-400' : 'text-gray-700 hover:text-blue-700 hover:bg-gray-50 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-800' }}">
                            <x-icons.profile />
                            Profile
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 text-gray-700 hover:text-blue-700 hover:bg-gray-50 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-800">
                            <x-icons.settings />
                            Settings
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Logout -->
            <li class="mt-auto">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="group flex w-full gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 text-gray-700 hover:text-red-700 hover:bg-red-50 dark:text-gray-400 dark:hover:text-red-400 dark:hover:bg-red-900/20">
                        <x-icons.logout />
                        Log out
                    </button>
                </form>
            </li>
        </ul>
    </nav>

    <!-- User profile section -->
    <div class="border-t border-gray-200 dark:border-gray-700 p-6">
        <!-- Theme toggle for mobile -->
        <div class="flex items-center justify-between mb-4 lg:hidden">
            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Theme</span>
            <x-theme-toggle size="sm" />
        </div>

        <div class="flex items-center gap-x-3">
            <div class="h-10 w-10 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center text-white font-semibold">
                {{ substr(Auth::user()->name, 0, 1) }}
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold text-gray-900 dark:text-white truncate">
                    {{ Auth::user()->name }}
                </p>
                <p class="text-xs text-gray-500 dark:text-gray-400 truncate">
                    {{ Auth::user()->email }}
                </p>
            </div>
        </div>
    </div>
</div>
