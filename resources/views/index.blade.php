<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkenalan Diri</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header Section -->
    <div class="bg-green-500 text-white p-8 text-center">
        <h1 class="text-4xl font-bold">Selamat Datang!</h1>
        <p class="mt-4 text-lg">Perkenalan Diri - Larakha Hasta Agung Prayoga</p>
    </div>

    <!-- Tentang Saya Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-500">Tentang Saya</h2>
            <p class="mt-4 text-center text-gray-600 max-w-xl mx-auto">
                Halo, nama saya Larakha Hasta Agung Prayoga. Saya seorang pelajar SMK Telkom Purwokerto.
            </p>
        </div>
    </section>

    <!-- Keterampilan Section -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-500">Keterampilan</h2>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8 max-w-2xl mx-auto">
                <li class="bg-white shadow-md rounded-lg p-6 text-center">
                    <span class="text-xl font-semibold">Design Grafis</span>
                </li>
                <li class="bg-white shadow-md rounded-lg p-6 text-center">
                    <span class="text-xl font-semibold">Fotografi</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- Landing Pages Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-500">proyek</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                @foreach($landingpages as $landingpage)
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition-transform">
                    <img src="{{ $landingpage->picture }}" alt="{{ $landingpage->title }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800">{{ $landingpage->title }}</h3>
                        <p class="text-sm text-gray-600 mt-2">{{ $landingpage->content }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-500">Kontak</h2>
            <p class="text-center text-gray-600 mt-4">Jika ingin mengenal lebih jauh, silakan hubungi saya di media sosial.</p>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2024 Raka. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
