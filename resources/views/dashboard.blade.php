<x-app-layout>
    <div class="min-h-screen bg-gray-50">
        {{-- Header Section --}}
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold">Welcome back, {{ Auth::user()->name }}! 👋</h1>
                        <p class="mt-2 text-blue-100">Ready to start your work today?</p>
                    </div>
                    <div class="hidden md:flex items-center gap-2">
                        <span class="bg-blue-500 bg-opacity-50 px-4 py-2 rounded-lg text-sm font-semibold">
                            {{ ucfirst(Auth::user()->role) }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            {{-- Quick Access Buttons --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                {{-- Dashboard Kasir --}}
                <a href="{{ route('dashboard') }}" class="bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white p-6 rounded-xl shadow-sm transition duration-200">
                    <div class="flex items-center gap-4">
                        <div class="bg-white bg-opacity-20 p-4 rounded-lg">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Dashboard Kasir</h3>
                            <p class="text-blue-100 text-sm">Lihat ringkasan & statistik</p>
                        </div>
                    </div>
                </a>

                {{-- Mulai Penjualan --}}
                <a href="{{ route('dashboard') }}" class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white p-6 rounded-xl shadow-sm transition duration-200">
                    <div class="flex items-center gap-4">
                        <div class="bg-white bg-opacity-20 p-4 rounded-lg">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Mulai Penjualan</h3>
                            <p class="text-green-100 text-sm">Buka kasir & proses transaksi</p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Main Content Grid --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                {{-- Left Column (2/3) --}}
                <div class="lg:col-span-2 space-y-6">
                    {{-- Quick Actions --}}
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Menu Utama</h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            {{-- Dashboard Kasir --}}
                            <a href="{{ route('dashboard') }}" class="flex flex-col items-center justify-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl hover:shadow-md border border-blue-200 transition duration-200 group">
                                <div class="bg-blue-600 p-3 rounded-lg group-hover:scale-110 transition duration-200 mb-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Dashboard</span>
                                <span class="text-xs text-gray-600 mt-1">Ringkasan</span>
                            </a>

                            {{-- POS / Kasir --}}
                            <a href="{{ route('dashboard') }}" class="flex flex-col items-center justify-center p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-xl hover:shadow-md border border-green-200 transition duration-200 group">
                                <div class="bg-green-600 p-3 rounded-lg group-hover:scale-110 transition duration-200 mb-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Kasir (POS)</span>
                                <span class="text-xs text-gray-600 mt-1">Transaksi</span>
                            </a>

                            {{-- Riwayat Transaksi --}}
                            <a href="{{ route('dashboard') }}" class="flex flex-col items-center justify-center p-6 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl hover:shadow-md border border-purple-200 transition duration-200 group">
                                <div class="bg-purple-600 p-3 rounded-lg group-hover:scale-110 transition duration-200 mb-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Riwayat</span>
                                <span class="text-xs text-gray-600 mt-1">Transaksi</span>
                            </a>

                            {{-- Products --}}
                            <a href="{{ route('products.index') }}" class="flex flex-col items-center justify-center p-6 bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl hover:shadow-md border border-orange-200 transition duration-200 group">
                                <div class="bg-orange-600 p-3 rounded-lg group-hover:scale-110 transition duration-200 mb-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Products</span>
                                <span class="text-xs text-gray-600 mt-1">Kelola Produk</span>
                            </a>

                            {{-- Sales --}}
                            <a href="{{ route('dashboard') }}" class="flex flex-col items-center justify-center p-6 bg-gradient-to-br from-pink-50 to-pink-100 rounded-xl hover:shadow-md border border-pink-200 transition duration-200 group">
                                <div class="bg-pink-600 p-3 rounded-lg group-hover:scale-110 transition duration-200 mb-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Sales</span>
                                <span class="text-xs text-gray-600 mt-1">Penjualan</span>
                            </a>

                            {{-- Customers --}}
                            <a href="{{ route('dashboard') }}" class="flex flex-col items-center justify-center p-6 bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl hover:shadow-md border border-indigo-200 transition duration-200 group">
                                <div class="bg-indigo-600 p-3 rounded-lg group-hover:scale-110 transition duration-200 mb-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Customers</span>
                                <span class="text-xs text-gray-600 mt-1">Pelanggan</span>
                            </a>

                            {{-- Analytics --}}
                            <a href="{{ route('dashboard') }}" class="flex flex-col items-center justify-center p-6 bg-gradient-to-br from-teal-50 to-teal-100 rounded-xl hover:shadow-md border border-teal-200 transition duration-200 group">
                                <div class="bg-teal-600 p-3 rounded-lg group-hover:scale-110 transition duration-200 mb-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Analytics</span>
                                <span class="text-xs text-gray-600 mt-1">Analitik</span>
                            </a>

                            {{-- Settings --}}
                            <a href="{{ route('dashboard') }}" class="flex flex-col items-center justify-center p-6 bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl hover:shadow-md border border-gray-200 transition duration-200 group">
                                <div class="bg-gray-600 p-3 rounded-lg group-hover:scale-110 transition duration-200 mb-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Settings</span>
                                <span class="text-xs text-gray-600 mt-1">Pengaturan</span>
                            </a>

                            {{-- Profile --}}
                            <a href="{{ route('profile.edit') }}" class="flex flex-col items-center justify-center p-6 bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl hover:shadow-md border border-yellow-200 transition duration-200 group">
                                <div class="bg-yellow-600 p-3 rounded-lg group-hover:scale-110 transition duration-200 mb-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Profile</span>
                                <span class="text-xs text-gray-600 mt-1">Akun Saya</span>
                            </a>
                        </div>
                    </div>

                    {{-- Info Cards --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- POS Features --}}
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                Fitur POS
                            </h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-sm text-gray-700">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>Dashboard dengan ringkasan transaksi</span>
                                </li>
                                <li class="flex items-start gap-2 text-sm text-gray-700">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>Kasir dengan keranjang belanja</span>
                                </li>
                                <li class="flex items-start gap-2 text-sm text-gray-700">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>Sistem hold cart (tahan transaksi)</span>
                                </li>
                                <li class="flex items-start gap-2 text-sm text-gray-700">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>Diskon & promo dengan kode</span>
                                </li>
                                <li class="flex items-start gap-2 text-sm text-gray-700">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>Multiple payment methods</span>
                                </li>
                                <li class="flex items-start gap-2 text-sm text-gray-700">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>Print struk & riwayat transaksi</span>
                                </li>
                            </ul>
                        </div>

                        {{-- System Info --}}
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Informasi Sistem
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-600">Status Akun</span>
                                    <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs font-semibold">Active</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-600">Profile</span>
                                    <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs font-semibold">100% Complete</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-600">Role</span>
                                    <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-xs font-semibold">{{ ucfirst(Auth::user()->role) }}</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-600">Member Since</span>
                                    <span class="font-semibold text-gray-800">{{ Auth::user()->created_at->format('M Y') }}</span>
                                </div>
                                <div class="pt-3 border-t border-gray-200">
                                    <p class="text-xs text-gray-600 mb-2">Last Login</p>
                                    <p class="text-sm font-semibold text-gray-800">{{ now()->format('d M Y, H:i') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right Column (1/3) --}}
                <div class="space-y-6">
                    {{-- Profile Card --}}
                    <div class="bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl shadow-sm text-white p-6">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="bg-white bg-opacity-20 p-3 rounded-full">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">{{ Auth::user()->name }}</h3>
                                <p class="text-blue-100 text-sm">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-3 mt-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm">Profile Completion</span>
                                <span class="text-sm font-bold flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    100%
                                </span>
                            </div>
                            <div class="w-full bg-white bg-opacity-20 rounded-full h-2">
                                <div class="bg-white h-2 rounded-full" style="width: 100%"></div>
                            </div>
                            <p class="text-xs text-blue-100 mt-2 flex items-center gap-1">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                All features unlocked!
                            </p>
                        </div>
                    </div>

                    {{-- Quick Links --}}
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-bold text-gray-800">Quick Links</h3>
                        </div>
                        <div class="p-4">
                            <div class="space-y-2">
                                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 p-3 bg-gray-50 hover:bg-blue-50 rounded-lg transition duration-200 group">
                                    <div class="bg-blue-100 p-2 rounded-lg group-hover:bg-blue-200 transition duration-200">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-gray-800">Mulai Penjualan</p>
                                        <p class="text-xs text-gray-600">Buka kasir</p>
                                    </div>
                                    <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-600 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>

                                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 p-3 bg-gray-50 hover:bg-purple-50 rounded-lg transition duration-200 group">
                                    <div class="bg-purple-100 p-2 rounded-lg group-hover:bg-purple-200 transition duration-200">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-gray-800">Riwayat Transaksi</p>
                                        <p class="text-xs text-gray-600">Lihat semua</p>
                                    </div>
                                    <svg class="w-5 h-5 text-gray-400 group-hover:text-purple-600 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>

                                <a href="{{ route('products.index') }}" class="flex items-center gap-3 p-3 bg-gray-50 hover:bg-orange-50 rounded-lg transition duration-200 group">
                                    <div class="bg-orange-100 p-2 rounded-lg group-hover:bg-orange-200 transition duration-200">
                                        <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-gray-800">Kelola Produk</p>
                                        <p class="text-xs text-gray-600">Products</p>
                                    </div>
                                    <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-600 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>

                                <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 p-3 bg-gray-50 hover:bg-green-50 rounded-lg transition duration-200 group">
                                    <div class="bg-green-100 p-2 rounded-lg group-hover:bg-green-200 transition duration-200">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-gray-800">Edit Profile</p>
                                        <p class="text-xs text-gray-600">Pengaturan akun</p>
                                    </div>
                                    <svg class="w-5 h-5 text-gray-400 group-hover:text-green-600 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- All Set Card --}}
                    <div class="bg-gradient-to-br from-green-600 to-green-700 rounded-xl shadow-sm text-white p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                            <h3 class="font-bold">All Set!</h3>
                        </div>
                        <p class="text-sm text-green-100 mb-4">
                            🎉 Your profile is 100% complete. You have full access to all POS features!
                        </p>
                        <a href="{{ route('dashboard') }}" class="block w-full bg-white text-green-600 text-center py-2 rounded-lg font-semibold hover:bg-green-50 transition duration-200">
                            Start Selling Now
                        </a>
                    </div>

                    {{-- Help & Support --}}
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Help & Support
                        </h3>
                        <div class="space-y-3">
                            <a href="#" class="flex items-center gap-3 text-sm text-gray-700 hover:text-blue-600 transition duration-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                                Documentation
                            </a>
                            <a href="#" class="flex items-center gap-3 text-sm text-gray-700 hover:text-blue-600 transition duration-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                </svg>
                                Video Tutorials
                            </a>
                            <a href="#" class="flex items-center gap-3 text-sm text-gray-700 hover:text-blue-600 transition duration-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                                Contact Support
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>