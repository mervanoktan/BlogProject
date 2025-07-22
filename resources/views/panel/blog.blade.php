<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benim Kişisel Blogum - Tüm Yazılar</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Varsayılan fontu Inter olarak ayarla */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

<!-- Ana Sayfa Başlığı (Header) - Anasayfa ile aynı -->
<header class="bg-white shadow-md py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <div class="flex-shrink-0">
            <h1 class="text-3xl font-bold text-indigo-600">
                <a href="index.html" class="hover:text-indigo-800 transition duration-300">Benim Blogum</a>
            </h1>
        </div>
        <nav class="hidden md:flex space-x-6">
            <a href="{{route('anasayfa')}}" class="text-gray-700 hover:text-indigo-600 font-medium transition duration-300">Ana Sayfa</a>
            <a href="{{route('hakkımda')}}" class="text-gray-700 hover:text-indigo-600 font-medium transition duration-300">Hakkımda</a>
            <a href="{{route('blog')}}" class="text-indigo-600 font-medium transition duration-300">Blog Yazıları</a>
            <a href="{{route('ilet')}}" class="text-gray-700 hover:text-indigo-600 font-medium transition duration-300">İletişim</a>
        </nav>
        <div class="flex items-center space-x-4">
            <a href="giris.html" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 transform hover:scale-105">Giriş Yap</a>
            <a href="kayit.html" class="border border-indigo-600 text-indigo-600 hover:bg-indigo-50 font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 transform hover:scale-105">Kaydol</a>
        </div>
        <button class="md:hidden text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </div>
</header>

<main class="flex-grow py-8">
    <section class="container mx-auto px-4 bg-white p-8 rounded-xl shadow-lg mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-8 text-center">Tüm Blog Yazıları</h2>

        <!-- Arama ve Filtreleme Bölümü (İsteğe Bağlı) -->
        <div class="mb-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <input type="text" placeholder="Yazılarda ara..." class="flex-grow px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option value="">Tüm Kategoriler</option>
                <option value="yazilim">Yazılım</option>
                <option value="pazarlama">Pazarlama</option>
                <option value="yasam">Yaşam</option>
                <!-- Kategoriler buraya dinamik olarak eklenebilir -->
            </select>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="all-posts-container">
            <!-- Blog Yazısı Kartları Buraya Dinamik Olarak Yüklenecek -->
            <!-- Ana sayfadaki gibi örnek kartlar: -->
            <article class="post-card bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                <img src="https://placehold.co/600x400/a78bfa/ffffff?text=Yazi+Gorseli+1" alt="Yazı Başlığı 1 Görseli" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-gray-900 mb-2">
                    <a href="yazi-detay.html" class="hover:text-indigo-600 transition duration-300">Yazılım Geliştirmede İlk Adımlar</a>
                </h3>
                <p class="text-sm text-gray-500 mb-3">Yazan: **[Yazar Adı]** | Tarih: 21 Temmuz 2025 | Kategori: <span class="text-indigo-600 font-medium">Yazılım</span></p>
                <p class="text-gray-700 mb-4">Yazılım dünyasına adım atmak isteyenler için temel bilgiler ve başlangıç kaynakları...</p>
                <a href="yazi-detay.html" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg transition duration-300">Devamını Oku</a>
            </article>

            <article class="post-card bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                <img src="https://placehold.co/600x400/818cf8/ffffff?text=Yazi+Gorseli+2" alt="Dijital Pazarlamanın Temelleri Görseli" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-gray-900 mb-2">
                    <a href="yazi-detay.html" class="hover:text-indigo-600 transition duration-300">Dijital Pazarlamanın Temelleri</a>
                </h3>
                <p class="text-sm text-gray-500 mb-3">Yazan: **[Yazar Adı]** | Tarih: 15 Temmuz 2025 | Kategori: <span class="text-indigo-600 font-medium">Pazarlama</span></p>
                <p class="text-gray-700 mb-4">Dijital pazarlamanın vazgeçilmez unsurları ve küçük işletmeler için stratejiler...</p>
                <a href="yazi-detay.html" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg transition duration-300">Devamını Oku</a>
            </article>

            <article class="post-card bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                <img src="https://placehold.co/600x400/c4b5fd/ffffff?text=Yazi+Gorseli+3" alt="Sağlıklı Yaşam İpuçları Görseli" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-gray-900 mb-2">
                    <a href="yazi-detay.html" class="hover:text-indigo-600 transition duration-300">Sağlıklı Yaşam İpuçları</a>
                </h3>
                <p class="text-sm text-gray-500 mb-3">Yazan: **[Yazar Adı]** | Tarih: 10 Temmuz 2025 | Kategori: <span class="text-indigo-600 font-medium">Yaşam</span></p>
                <p class="text-gray-700 mb-4">Günlük hayatınızda uygulayabileceğiniz basit ama etkili sağlıklı yaşam önerileri...</p>
                <a href="yazi-detay.html" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg transition duration-300">Devamını Oku</a>
            </article>
            <!-- Daha fazla yazı kartı buraya dinamik olarak eklenecek -->
        </div>

        <!-- Sayfalama (Pagination) - İsteğe Bağlı -->
        <div class="flex justify-center mt-10 space-x-2">
            <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-200">Önceki</a>
            <a href="#" class="px-4 py-2 border border-indigo-500 bg-indigo-500 text-white rounded-lg">1</a>
            <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-200">2</a>
            <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-200">3</a>
            <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-200">Sonraki</a>
        </div>
    </section>
</main>

<!-- Alt Kısım (Footer) - Anasayfa ile aynı -->
<footer class="main-footer bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-center md:text-left">
        <p class="mb-4 md:mb-0">&copy; 2025 Benim Blogum. Tüm Hakları Saklıdır.</p>
        <div class="social-links flex space-x-6 mb-4 md:mb-0">
            <a href="#" target="_blank" class="hover:text-indigo-400 transition duration-300">Facebook</a>
            <a href="#" target="_blank" class="hover:text-indigo-400 transition duration-300">X (Twitter)</a>
            <a href="#" target="_blank" class="hover:text-indigo-400 transition duration-300">LinkedIn</a>
        </div>
        <ul class="footer-nav flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-6">
            <li><a href="#" class="hover:text-indigo-400 transition duration-300">Gizlilik Politikası</a></li>
            <li><a href="#" class="hover:text-indigo-400 transition duration-300">Kullanım Koşulları</a></li>
        </ul>
    </div>
</footer>

</body>
</html>
