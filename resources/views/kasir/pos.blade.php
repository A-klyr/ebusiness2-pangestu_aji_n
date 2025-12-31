<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Point of Sales') }}
            </h2>
            <div class="text-sm text-gray-500" id="current-date"></div>
        </div>
    </x-slot>

    <div class="py-6" x-data="posSystem()">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-6 h-[calc(100vh-200px)]">

                <!-- Left Side: Product List -->
                <div class="lg:w-2/3 flex flex-col gap-6">
                    <!-- Search & Filter -->
                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                        <div class="relative">
                            <input type="text" x-model="search" placeholder="Cari nama produk atau SKU..."
                                class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    <div
                        class="flex-1 bg-white p-4 rounded-xl shadow-sm border border-gray-100 overflow-y-auto custom-scrollbar">
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                            <template x-for="product in filteredProducts" :key="product.id">
                                <div @click="addToCart(product)"
                                    class="group cursor-pointer bg-gray-50 hover:bg-white border border-gray-200 hover:border-blue-500 rounded-xl p-3 transition-all duration-200 hover:shadow-md flex flex-col h-full relative overflow-hidden">

                                    <!-- Stock Badge -->
                                    <div class="absolute top-2 right-2 z-10">
                                        <span class="text-[10px] font-bold px-2 py-0.5 rounded-full"
                                            :class="product.stock > 10 ? 'bg-green-100 text-green-700' : (product.stock > 0 ? 'bg-yellow-100 text-yellow-700' : 'bg-red-100 text-red-700')">
                                            <span x-text="product.stock"></span> Stok
                                        </span>
                                    </div>

                                    <!-- Image Placeholder -->
                                    <div
                                        class="aspect-square bg-gray-200 rounded-lg mb-3 flex items-center justify-center overflow-hidden">
                                        <template x-if="product.image">
                                            <img :src="'/storage/' + product.image"
                                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                        </template>
                                        <template x-if="!product.image">
                                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                        </template>
                                    </div>

                                    <h3 class="font-medium text-gray-800 text-sm mb-1 leading-tight line-clamp-2"
                                        x-text="product.name"></h3>
                                    <p class="text-blue-600 font-bold text-sm mt-auto"
                                        x-text="formatRupiah(product.price)"></p>
                                </div>
                            </template>

                            <!-- Empty State -->
                            <div x-show="filteredProducts.length === 0" class="col-span-full text-center py-12">
                                <p class="text-gray-500">Produk tidak ditemukan.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Cart -->
                <div class="lg:w-1/3 flex flex-col h-full">
                    <div
                        class="bg-white rounded-xl shadow-sm border border-gray-100 flex flex-col h-full overflow-hidden">
                        <!-- Cart Header -->
                        <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50">
                            <h3 class="font-bold text-gray-800 flex items-center gap-2">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                                Keranjang
                            </h3>
                            <button @click="clearCart()" x-show="cart.length > 0"
                                class="text-xs text-red-500 hover:text-red-700 underline">
                                Kosongkan
                            </button>
                        </div>

                        <!-- Cart Items -->
                        <div class="flex-1 overflow-y-auto p-4 space-y-3 custom-scrollbar">
                            <template x-if="cart.length === 0">
                                <div class="h-full flex flex-col items-center justify-center text-gray-400 space-y-2">
                                    <svg class="w-16 h-16 opacity-50" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                    </svg>
                                    <p class="text-sm">Keranjang kosong</p>
                                </div>
                            </template>

                            <template x-for="(item, index) in cart" :key="index">
                                <div
                                    class="flex gap-3 bg-white p-3 rounded-lg border border-gray-100 hover:border-blue-100 transition-colors">
                                    <div class="flex-1">
                                        <h4 class="text-sm font-medium text-gray-800 line-clamp-1" x-text="item.name">
                                        </h4>
                                        <p class="text-xs text-blue-600 font-semibold"
                                            x-text="formatRupiah(item.price)"></p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <button @click="updateQty(index, -1)"
                                            class="w-6 h-6 rounded-md bg-gray-100 hover:bg-gray-200 flex items-center justify-center text-gray-600 transition-colors">
                                            -
                                        </button>
                                        <span class="w-8 text-center text-sm font-medium" x-text="item.qty"></span>
                                        <button @click="updateQty(index, 1)"
                                            class="w-6 h-6 rounded-md bg-blue-100 hover:bg-blue-200 flex items-center justify-center text-blue-600 transition-colors">
                                            +
                                        </button>
                                    </div>

                                    <div class="text-right min-w-[60px]">
                                        <p class="text-sm font-bold text-gray-800"
                                            x-text="formatRupiah(item.price * item.qty)"></p>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <!-- Cart Summary -->
                        <div class="p-4 bg-gray-50 border-t border-gray-200 space-y-3">
                            <div class="flex justify-between text-sm text-gray-600">
                                <span>Subtotal</span>
                                <span x-text="formatRupiah(cartTotal)"></span>
                            </div>
                            <!-- Jika ada tax bisa ditambah disini -->

                            <div class="flex justify-between items-center pt-2 border-t border-gray-200">
                                <span class="text-base font-bold text-gray-800">Total</span>
                                <span class="text-xl font-bold text-blue-600" x-text="formatRupiah(cartTotal)"></span>
                            </div>

                            <button @click="processCheckout()" :disabled="cart.length === 0"
                                class="w-full py-3 bg-blue-600 hover:bg-blue-700 disabled:bg-gray-300 disabled:cursor-not-allowed text-white font-bold rounded-lg shadow-md hover:shadow-lg transition-all transform active:scale-95 flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                                Bayar Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function posSystem() {
            return {
                products: @json($products),
                search: '',
                cart: [],

                get filteredProducts() {
                    if (this.search === '') return this.products;
                    return this.products.filter(product => {
                        return product.name.toLowerCase().includes(this.search.toLowerCase()) ||
                            product.sku.toLowerCase().includes(this.search.toLowerCase());
                    });
                },

                get cartTotal() {
                    return this.cart.reduce((total, item) => total + (item.price * item.qty), 0);
                },

                addToCart(product) {
                    if (product.stock <= 0) {
                        alert('Stok produk habis!');
                        return;
                    }

                    const existingItem = this.cart.find(item => item.id === product.id);

                    if (existingItem) {
                        if (existingItem.qty < product.stock) {
                            existingItem.qty++;
                        } else {
                            alert('Stok tidak mencukupi untuk menambah jumlah!');
                        }
                    } else {
                        this.cart.push({
                            id: product.id,
                            name: product.name,
                            price: product.price,
                            qty: 1,
                            stock: product.stock
                        });
                    }
                },

                updateQty(index, change) {
                    const item = this.cart[index];
                    const newQty = item.qty + change;

                    if (newQty > item.stock) {
                        alert('Stok maksimal tercapai');
                        return;
                    }

                    if (newQty > 0) {
                        item.qty = newQty;
                    } else {
                        this.cart.splice(index, 1);
                    }
                },

                clearCart() {
                    if (confirm('Kosongkan keranjang?')) {
                        this.cart = [];
                    }
                },

                formatRupiah(number) {
                    return new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                        minimumFractionDigits: 0
                    }).format(number);
                },

                processCheckout() {
                    if (confirm('Lanjutkan pembayaran total ' + this.formatRupiah(this.cartTotal) + '?')) {
                        alert('Transaksi Berhasil! (Simulasi)');
                        this.cart = [];
                    }
                }
            }
        }

        // Clock Script
        function updateTime() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' };
            document.getElementById('current-date').innerText = now.toLocaleDateString('id-ID', options);
        }
        setInterval(updateTime, 1000);
        updateTime();
    </script>

    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #d1d5db;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #9ca3af;
        }
    </style>
</x-app-layout>