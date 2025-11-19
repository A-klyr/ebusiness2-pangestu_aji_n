<x-admin-layout>
    <x-slot name="title">Dashboard Admin</x-slot>
    <div x-data="{ sidebarOpen: true, activeMenu: 'dashboard' }" class="flex h-screen bg-gray-50">
        <!-- Sidebar -->
        <div :class="sidebarOpen ? 'w-64' : 'w-20'" class="bg-white border-r border-gray-200 transition-all duration-300 flex flex-col">
            <!-- Logo -->
            <div class="h-16 flex items-center justify-between px-4 border-b border-gray-200">
                <h1 x-show="sidebarOpen" class="text-xl font-bold text-gray-800">POS Admin</h1>
                <button @click="sidebarOpen = !sidebarOpen" class="p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg x-show="sidebarOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    <svg x-show="!sidebarOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Menu Items -->
            <nav class="flex-1 py-4">
                <!-- Dashboard -->
                <button @click="activeMenu = 'dashboard'" 
                    :class="activeMenu === 'dashboard' ? 'bg-blue-50 text-blue-600 border-r-4 border-blue-600' : 'text-gray-600 hover:bg-gray-50'"
                    class="w-full flex items-center gap-3 px-4 py-3 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span x-show="sidebarOpen" class="font-medium">Dashboard</span>
                </button>

                <!-- Products -->
                <a href="{{ route('products.index') }}" 
                    :class="activeMenu === 'products' ? 'bg-blue-50 text-blue-600 border-r-4 border-blue-600' : 'text-gray-600 hover:bg-gray-50'"
                    class="w-full flex items-center gap-3 px-4 py-3 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    <span x-show="sidebarOpen" class="font-medium">Products</span>
                </a>

                <!-- Sales -->
                <button @click="activeMenu = 'sales'" 
                    :class="activeMenu === 'sales' ? 'bg-blue-50 text-blue-600 border-r-4 border-blue-600' : 'text-gray-600 hover:bg-gray-50'"
                    class="w-full flex items-center gap-3 px-4 py-3 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <span x-show="sidebarOpen" class="font-medium">Sales</span>
                </button>

                <!-- Customers -->
                <button @click="activeMenu = 'customers'" 
                    :class="activeMenu === 'customers' ? 'bg-blue-50 text-blue-600 border-r-4 border-blue-600' : 'text-gray-600 hover:bg-gray-50'"
                    class="w-full flex items-center gap-3 px-4 py-3 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span x-show="sidebarOpen" class="font-medium">Customers</span>
                </button>

                <!-- Analytics -->
                <button @click="activeMenu = 'analytics'" 
                    :class="activeMenu === 'analytics' ? 'bg-blue-50 text-blue-600 border-r-4 border-blue-600' : 'text-gray-600 hover:bg-gray-50'"
                    class="w-full flex items-center gap-3 px-4 py-3 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                    <span x-show="sidebarOpen" class="font-medium">Analytics</span>
                </button>

                <!-- Settings -->
                <button @click="activeMenu = 'settings'" 
                    :class="activeMenu === 'settings' ? 'bg-blue-50 text-blue-600 border-r-4 border-blue-600' : 'text-gray-600 hover:bg-gray-50'"
                    class="w-full flex items-center gap-3 px-4 py-3 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span x-show="sidebarOpen" class="font-medium">Settings</span>
                </button>
            </nav>

            <!-- User Profile -->
            <div class="p-4 border-t border-gray-200">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-purple-500 flex items-center justify-center text-white font-semibold">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div x-show="sidebarOpen">
                        <p class="text-sm font-semibold text-gray-800">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                  <!-- Tombol Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-3 py-2 text-sm text-red-600 hover:bg-red-50 rounded-md">
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Header -->
            <div class="bg-white border-b border-gray-200 sticky top-0 z-10">
                <div class="px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Dashboard</h2>
                            <p class="text-sm text-gray-500 mt-1">Welcome back! Here's what's happening today.</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 w-64">
                            </div>
                            <button class="p-2 rounded-lg hover:bg-gray-100 relative">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                                <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                            </button>
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">
                                + New Sale
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="p-6 space-y-6">
                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Today's Revenue -->
                    <div class="bg-white rounded-xl p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                        <div class="flex items-start justify-between mb-4">
                            <div class="bg-blue-500 p-3 rounded-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-green-600 bg-green-50 px-2 py-1 rounded-full">+15.3%</span>
                        </div>
                        <h3 class="text-sm text-gray-600 mb-1">Today's Revenue</h3>
                        <p class="text-2xl font-bold text-gray-800">Rp 4.2M</p>
                        <p class="text-xs text-gray-500 mt-2">42 transactions</p>
                    </div>

                    <!-- Total Products -->
                    <div class="bg-white rounded-xl p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                        <div class="flex items-start justify-between mb-4">
                            <div class="bg-green-500 p-3 rounded-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-gray-600 bg-gray-50 px-2 py-1 rounded-full">156 active</span>
                        </div>
                        <h3 class="text-sm text-gray-600 mb-1">Total Products</h3>
                        <p class="text-2xl font-bold text-gray-800">1,248</p>
                        <p class="text-xs text-gray-500 mt-2">156 categories</p>
                    </div>

                    <!-- Customers -->
                    <div class="bg-white rounded-xl p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                        <div class="flex items-start justify-between mb-4">
                            <div class="bg-purple-500 p-3 rounded-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-green-600 bg-green-50 px-2 py-1 rounded-full">+234 new</span>
                        </div>
                        <h3 class="text-sm text-gray-600 mb-1">Total Customers</h3>
                        <p class="text-2xl font-bold text-gray-800">8,462</p>
                        <p class="text-xs text-gray-500 mt-2">234 new this week</p>
                    </div>

                    <!-- Low Stock -->
                    <div class="bg-white rounded-xl p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                        <div class="flex items-start justify-between mb-4">
                            <div class="bg-orange-500 p-3 rounded-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-orange-600 bg-orange-50 px-2 py-1 rounded-full">Alert</span>
                        </div>
                        <h3 class="text-sm text-gray-600 mb-1">Low Stock Items</h3>
                        <p class="text-2xl font-bold text-gray-800">24</p>
                        <p class="text-xs text-gray-500 mt-2">Need restock soon</p>
                    </div>
                </div>

                <!-- Sales Chart -->
                <div class="bg-white rounded-xl border border-gray-200 p-6">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Sales Analytics</h3>
                            <p class="text-sm text-gray-500">Last 7 days performance</p>
                        </div>
                        <div class="flex gap-2">
                            <button class="px-3 py-1 text-xs font-medium bg-blue-600 text-white rounded-lg">7 Days</button>
                            <button class="px-3 py-1 text-xs font-medium text-gray-600 hover:bg-gray-100 rounded-lg">30 Days</button>
                            <button class="px-3 py-1 text-xs font-medium text-gray-600 hover:bg-gray-100 rounded-lg">90 Days</button>
                        </div>
                    </div>
                    
                    <!-- Chart Container -->
                    <div class="h-80">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>

                <!-- Transactions & Top Products -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Recent Transactions -->
                    <div class="lg:col-span-2 bg-white rounded-xl border border-gray-200">
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-bold text-gray-800">Recent Transactions</h3>
                                <button class="text-sm text-blue-600 hover:text-blue-700 font-medium flex items-center gap-1">
                                    View All
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-600">Order ID</th>
                                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-600">Customer</th>
                                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-600">Product</th>
                                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-600">Amount</th>
                                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-600">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-gray-100 hover:bg-gray-50 transition-colors">
                                        <td class="py-4 px-6 text-sm font-medium text-gray-800">#INV-2847</td>
                                        <td class="py-4 px-6 text-sm text-gray-600">John Doe</td>
                                        <td class="py-4 px-6 text-sm text-gray-600">Wireless Earbuds</td>
                                        <td class="py-4 px-6 text-sm font-semibold text-gray-800">Rp 850K</td>
                                        <td class="py-4 px-6">
                                            <span class="text-xs font-medium px-3 py-1 rounded-full bg-green-100 text-green-700">Completed</span>
                                        </td>
                                    </tr>
                                    <tr class="border-t border-gray-100 hover:bg-gray-50 transition-colors">
                                        <td class="py-4 px-6 text-sm font-medium text-gray-800">#INV-2846</td>
                                        <td class="py-4 px-6 text-sm text-gray-600">Jane Smith</td>
                                        <td class="py-4 px-6 text-sm text-gray-600">Smart Watch</td>
                                        <td class="py-4 px-6 text-sm font-semibold text-gray-800">Rp 1.2M</td>
                                        <td class="py-4 px-6">
                                            <span class="text-xs font-medium px-3 py-1 rounded-full bg-yellow-100 text-yellow-700">Pending</span>
                                        </td>
                                    </tr>
                                    <tr class="border-t border-gray-100 hover:bg-gray-50 transition-colors">
                                        <td class="py-4 px-6 text-sm font-medium text-gray-800">#INV-2845</td>
                                        <td class="py-4 px-6 text-sm text-gray-600">Mike Johnson</td>
                                        <td class="py-4 px-6 text-sm text-gray-600">USB-C Cable</td>
                                        <td class="py-4 px-6 text-sm font-semibold text-gray-800">Rp 45K</td>
                                        <td class="py-4 px-6">
                                            <span class="text-xs font-medium px-3 py-1 rounded-full bg-green-100 text-green-700">Completed</span>
                                        </td>
                                    </tr>
                                    <tr class="border-t border-gray-100 hover:bg-gray-50 transition-colors">
                                        <td class="py-4 px-6 text-sm font-medium text-gray-800">#INV-2844</td>
                                        <td class="py-4 px-6 text-sm text-gray-600">Sarah Williams</td>
                                        <td class="py-4 px-6 text-sm text-gray-600">Phone Case</td>
                                        <td class="py-4 px-6 text-sm font-semibold text-gray-800">Rp 120K</td>
                                        <td class="py-4 px-6">
                                            <span class="text-xs font-medium px-3 py-1 rounded-full bg-blue-100 text-blue-700">Processing</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Top Products -->
                    <div class="bg-white rounded-xl border border-gray-200">
                        <div class="p-6 border-b border-gray-200">
                            <h3 class="text-lg font-bold text-gray-800">Top Products</h3>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer">
                                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-500 rounded-lg flex items-center justify-center text-white font-bold text-sm">
                                    #1
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-semibold text-gray-800 truncate">Wireless Earbuds</p>
                                    <p class="text-xs text-gray-500">342 sold</p>
                                </div>
                                <span class="text-sm font-bold text-gray-800">Rp 850K</span>
                            </div>
                            <div class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer">
                                <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-500 rounded-lg flex items-center justify-center text-white font-bold text-sm">
                                    #2
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-semibold text-gray-800 truncate">Smart Watch</p>
                                    <p class="text-xs text-gray-500">298 sold</p>
                                </div>
                                <span class="text-sm font-bold text-gray-800">Rp 1.2M</span>
                            </div>
                            <div class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer">
                                <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-500 rounded-lg flex items-center justify-center text-white font-bold text-sm">
                                    #3
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-semibold text-gray-800 truncate">USB-C Cable</p>
                                    <p class="text-xs text-gray-500">256 sold</p>
                                </div>
                                <span class="text-sm font-bold text-gray-800">Rp 45K</span>
                            </div>
                            <div class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer">
                                <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-lg flex items-center justify-center text-white font-bold text-sm">
                                    #4
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-semibold text-gray-800 truncate">Phone Case</p>
                                    <p class="text-xs text-gray-500">189 sold</p>
                                </div>
                                <span class="text-sm font-bold text-gray-800">Rp 120K</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('salesChart');
            
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [
                        {
                            label: 'Revenue',
                            data: [3200000, 4100000, 3800000, 5200000, 4500000, 6100000, 4200000],
                            borderColor: 'rgb(59, 130, 246)',
                            backgroundColor: 'rgba(59, 130, 246, 0.1)',
                            tension: 0.4,
                            fill: true,
                            pointRadius: 6,
                            pointHoverRadius: 8,
                            pointBackgroundColor: 'rgb(59, 130, 246)',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2
                        },
                        {
                            label: 'Transactions',
                            data: [32, 41, 38, 52, 45, 61, 42],
                            borderColor: 'rgb(16, 185, 129)',
                            backgroundColor: 'rgba(16, 185, 129, 0.1)',
                            tension: 0.4,
                            fill: true,
                            pointRadius: 6,
                            pointHoverRadius: 8,
                            pointBackgroundColor: 'rgb(16, 185, 129)',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            yAxisID: 'y1'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                            align: 'end',
                            labels: {
                                usePointStyle: true,
                                padding: 20,
                                font: {
                                    size: 12,
                                    weight: '500'
                                }
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            padding: 12,
                            borderColor: 'rgba(255, 255, 255, 0.1)',
                            borderWidth: 1,
                            titleFont: {
                                size: 13,
                                weight: 'bold'
                            },
                            bodyFont: {
                                size: 12
                            },
                            callbacks: {
                                label: function(context) {
                                    let label = context.dataset.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.parsed.y !== null) {
                                        if (context.datasetIndex === 0) {
                                            label += 'Rp ' + (context.parsed.y / 1000000).toFixed(1) + 'M';
                                        } else {
                                            label += context.parsed.y + ' orders';
                                        }
                                    }
                                    return label;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            type: 'linear',
                            display: true,
                            position: 'left',
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)',
                                drawBorder: false
                            },
                            ticks: {
                                callback: function(value) {
                                    return 'Rp ' + (value / 1000000) + 'M';
                                },
                                font: {
                                    size: 11
                                },
                                color: '#6B7280'
                            }
                        },
                        y1: {
                            type: 'linear',
                            display: true,
                            position: 'right',
                            grid: {
                                drawOnChartArea: false,
                            },
                            ticks: {
                                callback: function(value) {
                                    return value;
                                },
                                font: {
                                    size: 11
                                },
                                color: '#6B7280'
                            }
                        },
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                font: {
                                    size: 11,
                                    weight: '500'
                                },
                                color: '#6B7280'
                            }
                        }
                    }
                }
            });
        });
    </script>
</x-app-layout>