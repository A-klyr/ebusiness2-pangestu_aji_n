<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            User Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h3 class="text-lg font-semibold mb-3">Welcome, {{ Auth::user()->name }}!</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    You are logged in as a <span class="font-semibold text-indigo-600">{{ Auth::user()->role }}</span>.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow">
                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Recent Activity</h4>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">You viewed 5 new posts this week.</p>
                </div>

                <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow">
                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Messages</h4>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">2 unread messages.</p>
                </div>

                <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow">
                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Profile Status</h4>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Your profile is 80% complete.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
