@props(['size' => 'md', 'position' => 'inline'])

@php
$sizeClasses = match ($size) {
    'sm' => 'h-8 w-8 p-1.5',
    'lg' => 'h-12 w-12 p-3',
    default => 'h-10 w-10 p-2.5',
};

$positionClasses = match ($position) {
    'fixed' => 'fixed bottom-6 right-6 z-50 shadow-lg',
    'sticky' => 'sticky top-4 z-40',
    default => '',
};
@endphp

<button
    x-data="themeToggle"
    @click="toggle()"
    {{ $attributes->merge(['class' => "theme-toggle relative inline-flex items-center justify-center rounded-lg bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition-all duration-200 ease-in-out $sizeClasses $positionClasses"]) }}
    :title="isDark ? 'Switch to light mode' : 'Switch to dark mode'"
    :aria-label="isDark ? 'Switch to light mode' : 'Switch to dark mode'"
    type="button"
>
    <!-- Light mode icon (sun) -->
    <svg x-show="!isDark"
         x-transition:enter="transition ease-in-out duration-300"
         x-transition:enter-start="opacity-0 rotate-90 scale-75"
         x-transition:enter-end="opacity-100 rotate-0 scale-100"
         x-transition:leave="transition ease-in-out duration-200"
         x-transition:leave-start="opacity-100 rotate-0 scale-100"
         x-transition:leave-end="opacity-0 -rotate-90 scale-75"
         class="theme-toggle-icon absolute inset-0 h-full w-full p-2"
         fill="none"
         viewBox="0 0 24 24"
         stroke-width="1.5"
         stroke="currentColor"
         aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636a9 9 0 1012.728 0z" />
    </svg>

    <!-- Dark mode icon (moon) -->
    <svg x-show="isDark"
         x-transition:enter="transition ease-in-out duration-300"
         x-transition:enter-start="opacity-0 rotate-90 scale-75"
         x-transition:enter-end="opacity-100 rotate-0 scale-100"
         x-transition:leave="transition ease-in-out duration-200"
         x-transition:leave-start="opacity-100 rotate-0 scale-100"
         x-transition:leave-end="opacity-0 -rotate-90 scale-75"
         class="theme-toggle-icon absolute inset-0 h-full w-full p-2"
         fill="none"
         viewBox="0 0 24 24"
         stroke-width="1.5"
         stroke="currentColor"
         aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
    </svg>
</button>
