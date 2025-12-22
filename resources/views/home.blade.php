@extends('layouts.boutique')

@section('content')

<!-- Hero Section - Version Simple (Sans Carousel) -->
<div class="relative bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-800 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE0YzMuMzEgMCA2LTIuNjkgNi02cy0yLjY5LTYtNi02LTYgMi42OS02IDYgMi42OSA2IDYgNnptLTEyIDJjMi4yMSAwIDQtMS43OSA0LTRzLTEuNzktNC00LTQtNCAxLjc5LTQgNCAxLjc5IDQgNCA0em0yNCAyNGMzLjMxIDAgNi0yLjY5IDYtNnMtMi42OS02LTYtNi02IDIuNjktNiA2IDIuNjkgNiA2IDZ6bS0xMiAyYzIuMjEgMCA0LTEuNzkgNC00cy0xLjc5LTQtNC00LTQgMS43OS00IDQgMS43OSA0IDQgNHoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-20"></div>
    
    <div class="relative">
        <div class="relative h-[500px] md:h-[600px] flex items-center justify-center">
            <div class="text-center px-4 z-10 max-w-5xl mx-auto">
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 drop-shadow-2xl animate-fade-in">
                    Bienvenue sur <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-400 to-purple-400">PixieMart</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-4">
                    Votre boutique officielle Love and Deepspace
                </p>
                <p class="text-lg text-purple-200 mb-8">
                    ✨ Figurines collector • 🎨 Posters exclusifs • 👕 Merch officiel
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('products.index') }}" class="inline-block bg-gradient-to-r from-pink-500 to-purple-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:from-pink-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Découvrir la collection
                    </a>
                    <a href="{{ route('products.index', ['category' => 'figurines']) }}" class="inline-block bg-white text-purple-900 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Voir les figurines
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section Catégories Rapides -->
<div class="bg-purple-50 py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Parcourir par catégorie</h2>
            <p class="text-gray-600">Trouvez rapidement ce que vous cherchez</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <!-- Catégorie Figurines -->
            <a href="{{ route('products.index', ['category' => 'figurines']) }}" class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative z-10">
                    <svg class="w-12 h-12 mx-auto mb-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                    <h3 class="text-white font-semibold text-lg">Figurines</h3>
                </div>
            </a>

            <!-- Catégorie Posters -->
            <a href="{{ route('products.index', ['category' => 'posters']) }}" class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-blue-500 to-cyan-500 p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative z-10">
                    <svg class="w-12 h-12 mx-auto mb-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <h3 class="text-white font-semibold text-lg">Posters</h3>
                </div>
            </a>

            <!-- Catégorie Vêtements -->
            <a href="{{ route('products.index', ['category' => 'vetements']) }}" class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-green-500 to-emerald-500 p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative z-10">
                    <svg class="w-12 h-12 mx-auto mb-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                    <h3 class="text-white font-semibold text-lg">Vêtements</h3>
                </div>
            </a>

            <!-- Catégorie Accessoires -->
            <a href="{{ route('products.index', ['category' => 'accessoires']) }}" class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-yellow-500 to-orange-500 p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative z-10">
                    <svg class="w-12 h-12 mx-auto mb-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                    </svg>
                    <h3 class="text-white font-semibold text-lg">Accessoires</h3>
                </div>
            </a>

            <!-- Catégorie Maison -->
            <a href="{{ route('products.index', ['category' => 'maison']) }}" class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-red-500 to-pink-500 p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative z-10">
                    <svg class="w-12 h-12 mx-auto mb-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <h3 class="text-white font-semibold text-lg">Maison</h3>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Section Produits Vedettes -->
<div class="bg-purple-50 py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-2">⭐ Produits Vedettes</h2>
                <p class="text-gray-600">Nos coups de cœur sélectionnés pour vous</p>
            </div>
            <a href="{{ route('products.index', ['featured' => true]) }}" class="hidden md:inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold group">
                Voir tout
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @forelse ($featuredProducts as $featuredProduct)
                <x-card-product :product="$featuredProduct" />
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-lg">Aucun produit vedette disponible pour le moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Section Nouveautés -->
<div id="nouveautes" class="bg-purple-50 py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-2">✨ Nouveautés</h2>
                <p class="text-gray-600">Les derniers arrivages tout juste déballés</p>
            </div>
            <a href="{{ route('products.index', ['sort' => 'newest']) }}" class="hidden md:inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold group">
                Voir tout
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @forelse ($newProducts as $newProduct)
                <x-card-product :product="$newProduct" />
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-lg">Aucune nouveauté disponible pour le moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Section Promotions -->
<div class="bg-purple-50 py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-2">🔥 En Promotion</h2>
                <p class="text-gray-600">Profitez de nos offres exceptionnelles</p>
            </div>
            <a href="{{ route('products.index', ['on_sale' => true]) }}" class="hidden md:inline-flex items-center text-red-600 hover:text-red-700 font-semibold group">
                Voir tout
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @forelse ($saleProducts as $saleProduct)
                <x-card-product :product="$saleProduct" />
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-lg">Aucune promotion disponible pour le moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Section Newsletter/CTA -->
<div class="bg-gradient-to-r from-purple-600 to-pink-600 py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Restez informé des nouveautés ✨</h2>
            <p class="text-purple-100 text-lg mb-8 max-w-2xl mx-auto">
                Inscrivez-vous à notre newsletter et recevez en exclusivité les dernières sorties et offres spéciales Love and Deepspace
            </p>
            <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                <input 
                    type="email" 
                    placeholder="Votre email" 
                    class="flex-1 px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-300"
                    required
                >
                <button 
                    type="submit" 
                    class="bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300 shadow-lg"
                >
                    S'inscrire
                </button>
            </form>
        </div>
    </div>
</div>

@endsection