<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-inter antialiased bg-gray-50 dark:bg-gray-950" x-data="{ sidebarOpen: false }">
        <div class="min-h-screen">
            <!-- Mobile sidebar overlay -->
            <div x-show="sidebarOpen"
                 x-transition:enter="transition-opacity ease-linear duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity ease-linear duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="fixed inset-0 z-40 lg:hidden"
                 style="display: none;">
                <div class="fixed inset-0 bg-gray-600 bg-opacity-75" @click="sidebarOpen = false"></div>
            </div>

            <!-- Mobile sidebar -->
            <div x-show="sidebarOpen"
                 x-transition:enter="transition ease-in-out duration-300 transform"
                 x-transition:enter-start="-translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300 transform"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="-translate-x-full"
                 class="fixed inset-y-0 left-0 z-50 w-64 bg-white dark:bg-gray-900 lg:hidden"
                 style="display: none;">
                @include('layouts.sidebar')
            </div>

            <!-- Desktop sidebar -->
            <div class="hidden lg:fixed lg:inset-y-0 lg:z-30 lg:flex lg:w-64 lg:flex-col">
                @include('layouts.sidebar')
            </div>

            <!-- Main content -->
            <div class="lg:pl-64">
                <!-- Top navigation -->
                <div class="sticky top-0 z-20 bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm border-b border-gray-200 dark:border-gray-700">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="flex h-16 items-center justify-between">
                            <!-- Mobile menu button -->
                            <button @click="sidebarOpen = true"
                                    class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:bg-gray-100 hover:text-gray-500 dark:hover:bg-gray-800 dark:hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                                <x-icons.menu />
                            </button>

                            <!-- Page title -->
                            @isset($header)
                                <div class="flex-1 min-w-0 lg:px-0">
                                    <h1 class="text-2xl font-bold leading-7 text-gray-900 dark:text-white sm:truncate">
                                        {{ $header }}
                                    </h1>
                                </div>
                            @endisset

                            <!-- User menu -->
                            <div class="flex items-center gap-x-2 lg:gap-x-4">
                                <!-- Theme Toggle -->
                                <x-theme-toggle size="md" class="hidden sm:flex" />

                                <!-- Notifications -->
                                <button type="button" class="relative p-2 text-gray-400 hover:text-gray-500 dark:hover:text-gray-300 rounded-lg">
                                    <span class="sr-only">View notifications</span>
                                    <x-icons.notification />
                                    <!-- Notification badge -->
                                    <span class="absolute -top-1 -right-1 h-3 w-3 rounded-full bg-red-500 ring-2 ring-white dark:ring-gray-900"></span>
                                </button>

                                <!-- Profile dropdown -->
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="flex items-center gap-x-3 text-sm leading-6 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg p-2">
                                            <div class="h-8 w-8 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center text-white font-semibold text-sm">
                                                {{ substr(Auth::user()->name, 0, 1) }}
                                            </div>
                                            <div class="hidden sm:block">
                                                <span class="font-semibold">{{ Auth::user()->name }}</span>
                                            </div>
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile.edit')">
                                            <x-icons.profile class="w-4 h-4 mr-2" />
                                            {{ __('Profile') }}
                                        </x-dropdown-link>

                                        <!-- Theme toggle in dropdown -->
                                        <div class="px-4 py-2.5 sm:hidden">
                                            <div class="flex items-center justify-between">
                                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Theme</span>
                                                <x-theme-toggle size="sm" />
                                            </div>
                                        </div>

                                        <hr class="my-1 border-gray-200 dark:border-gray-600">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                                <x-icons.logout class="w-4 h-4 mr-2" />
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page content -->
                <main class="py-8">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
