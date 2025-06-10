<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2.5 bg-blue-600 hover:bg-blue-700 border border-transparent rounded-lg font-semibold text-sm text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 active:bg-blue-800 transition-all duration-150 ease-in-out']) }}>
    {{ $slot }}
</button>
