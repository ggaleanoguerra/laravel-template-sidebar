import './bootstrap';

import Alpine from 'alpinejs';

// Theme Management
window.themeManager = {
    // Get the current theme from localStorage or system preference
    getTheme() {
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            return 'dark';
        } else {
            return 'light';
        }
    },

    // Set theme and apply to document
    setTheme(theme) {
        localStorage.theme = theme;
        this.applyTheme(theme);
    },

    // Apply theme to document
    applyTheme(theme) {
        if (theme === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    },

    // Toggle between light and dark
    toggle() {
        const currentTheme = this.getTheme();
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        this.setTheme(newTheme);
        return newTheme;
    },

    // Initialize theme on page load
    init() {
        this.applyTheme(this.getTheme());
    }
};

// Initialize theme on DOM content loaded
document.addEventListener('DOMContentLoaded', () => {
    window.themeManager.init();
});

// Alpine.js Theme Toggle Component
Alpine.data('themeToggle', () => ({
    isDark: false,

    init() {
        this.isDark = window.themeManager.getTheme() === 'dark';

        // Listen for system theme changes
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (!localStorage.theme) {
                this.isDark = e.matches;
                window.themeManager.applyTheme(e.matches ? 'dark' : 'light');
            }
        });
    },

    toggle() {
        const newTheme = window.themeManager.toggle();
        this.isDark = newTheme === 'dark';

        // Dispatch custom event for other components
        window.dispatchEvent(new CustomEvent('theme-changed', {
            detail: { theme: newTheme }
        }));
    }
}));

window.Alpine = Alpine;

Alpine.start();
