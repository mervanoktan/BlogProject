<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benim Kişisel Blogum - Ana Sayfa</title>
    <!-- Tailwind CSS CDN'i -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inter Fontu -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Varsayılan fontu Inter olarak ayarla */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

<!-- Ana Sayfa Başlığı (Header) -->
<header class="bg-white shadow-md py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <!-- Blog Logosu/Başlığı -->
        <div class="flex-shrink-0">
            <h1 class="text-3xl font-bold text-indigo-600">
                <a href="index.html" class="hover:text-indigo-800 transition duration-300">Benim Blogum</a>
            </h1>
        </div>

        <!-- Navigasyon Menüsü -->
        <nav class="hidden md:flex space-x-6">
            <a href="index.html" class="text-gray-700 hover:text-indigo-600 font-medium transition duration-300">Ana Sayfa</a>
            <a href="hakkimda.html" class="text-gray-700 hover:text-indigo-600 font-medium transition duration-300">Hakkımda</a>
            <a href="blog.html" class="text-gray-700 hover:text-indigo-600 font-medium transition duration-300">Blog Yazıları</a>
            <a href="iletisim.html" class="text-gray-700 hover:text-indigo-600 font-medium transition duration-300">İletişim</a>
        </nav>

        <!-- Kullanıcı Alanı (Giriş/Kayıt veya Profil) -->
        <div class="flex items-center space-x-4">
            <!-- Kullanıcı Giriş Yapmamışsa Göster -->
            <a href="giris.html" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 transform hover:scale-105">Giriş Yap</a>
            <a href="kayit.html" class="border border-indigo-600 text-indigo-600 hover:bg-indigo-50 font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 transform hover:scale-105">Kaydol</a>

            <!-- Kullanıcı Giriş Yapmışsa Göster (Bu kısım JavaScript ile dinamik olarak kontrol edilir) -->
            <!--
            <span class="text-gray-700 font-medium hidden md:block">Hoş Geldiniz, KullanıcıAdı!</span>
            <a href="profil.html" class="flex items-center space-x-2">
                <img src="https://placehold.co/40x40/cccccc/333333?text=PR" alt="Profil Resmi" class="w-10 h-10 rounded-full border-2 border-indigo-500">
            </a>
            <a href="cikis.html" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 transform hover:scale-105">Çıkış Yap</a>
            -->
        </div>

        <!-- Mobil Navigasyon Butonu (Küçük Ekranlar İçin) -->
        <button class="md:hidden text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </div>
</header>

<main class="py-8">
    <!-- Hero Section (Ana Tanıtım Alanı) -->
    <section class="hero-section bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-20 rounded-xl shadow-lg mx-auto max-w-7xl px-4 mb-12 flex flex-col items-center justify-center text-center">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight">Hoş Geldiniz! Keşfedin, Okuyun, Katılın.</h2>
        <p class="text-lg md:text-xl mb-8 max-w-2xl">En son yazılarımı keşfedin ve düşüncelerinizi paylaşarak topluluğumuza katılın.</p>
        <a href="#latest-posts" class="bg-white text-indigo-600 hover:bg-gray-100 font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">En Son Yazılara Göz At</a>
    </section>

    <!-- En Son Yazılar Bölümü -->
    <section id="latest-posts" class="latest-posts-section container mx-auto px-4 mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-8 text-center">En Son Yazılarım</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Örnek Blog Yazısı Kartı 1 -->
            <article class="post-card bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                <img src="https://placehold.co/600x400/a78bfa/ffffff?text=Yazi+Gorseli+1" alt="Yazılım Geliştirmede İlk Adımlar Görseli" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-gray-900 mb-2">
                    <a href="yazi-detay.html" class="hover:text-indigo-600 transition duration-300">Yazılım Geliştirmede İlk Adımlar</a>
                </h3>
                <p class="text-sm text-gray-500 mb-3">Yazan: **[Yazar Adı]** | Tarih: 21 Temmuz 2025 | Kategori: <span class="text-indigo-600 font-medium">Yazılım</span></p>
                <p class="text-gray-700 mb-4">Yazılım dünyasına adım atmak isteyenler için temel bilgiler ve başlangıç kaynakları...</p>
                <a href="yazi-detay.html" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg transition duration-300">Devamını Oku</a>
            </article>

            <!-- Örnek Blog Yazısı Kartı 2 -->
            <article class="post-card bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                <img src="https://placehold.co/600x400/818cf8/ffffff?text=Yazi+Gorseli+2" alt="Dijital Pazarlamanın Temelleri Görseli" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-gray-900 mb-2">
                    <a href="yazi-detay.html" class="hover:text-indigo-600 transition duration-300">Dijital Pazarlamanın Temelleri</a>
                </h3>
                <p class="text-sm text-gray-500 mb-3">Yazan: **[Yazar Adı]** | Tarih: 15 Temmuz 2025 | Kategori: <span class="text-indigo-600 font-medium">Pazarlama</span></p>
                <p class="text-gray-700 mb-4">Dijital pazarlamanın vazgeçilmez unsurları ve küçük işletmeler için stratejiler...</p>
                <a href="yazi-detay.html" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg transition duration-300">Devamını Oku</a>
            </article>

            <!-- Örnek Blog Yazısı Kartı 3 -->
            <article class="post-card bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                <img src="https://placehold.co/600x400/c4b5fd/ffffff?text=Yazi+Gorseli+3" alt="Sağlıklı Yaşam İpuçları Görseli" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-gray-900 mb-2">
                    <a href="yazi-detay.html" class="hover:text-indigo-600 transition duration-300">Sağlıklı Yaşam İpuçları</a>
                </h3>
                <p class="text-sm text-gray-500 mb-3">Yazan: **[Yazar Adı]** | Tarih: 10 Temmuz 2025 | Kategori: <span class="text-indigo-600 font-medium">Yaşam</span></p>
                <p class="text-gray-700 mb-4">Günlük hayatınızda uygulayabileceğiniz basit ama etkili sağlıklı yaşam önerileri...</p>
                <a href="yazi-detay.html" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg transition duration-300">Devamını Oku</a>
            </article>

            <!-- Daha fazla yazı kartı buraya dinamik olarak eklenebilir -->
        </div>
    </section>

    <!-- Hakkımda Kısa Bilgi Bölümü -->
    <section class="about-short-section bg-white py-12 rounded-xl shadow-lg mx-auto max-w-7xl px-4 mb-12 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Beni Tanıyın</h2>
        <p class="text-lg text-gray-700 mb-6 max-w-3xl mx-auto">Merhaba! Bu blogda yazılım, teknoloji, kişisel gelişim ve hayat üzerine düşüncelerimi paylaşıyorum. Amacım, bilgi birikimimi sizinle paylaşmak ve hep birlikte öğrenmek.</p>
        <a href="hakkimda.html" class="bg-gray-200 text-gray-800 hover:bg-gray-300 font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300 transform hover:scale-105">Daha Fazlasını Öğren</a>
    </section>

    <!-- E-posta Bülteni Kayıt Bölümü -->
    <section class="newsletter-section bg-indigo-700 text-white py-12 rounded-xl shadow-lg mx-auto max-w-7xl px-4 mb-12 text-center">
        <h2 class="text-3xl font-bold mb-4">Yeni Yazıları Kaçırmayın!</h2>
        <p class="text-lg mb-6 max-w-2xl mx-auto">E-posta bültenime kaydolarak en son yazılardan ilk siz haberdar olun.</p>
        <form class="newsletter-form flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4">
            <input type="email" placeholder="E-posta adresinizi girin" required class="w-full sm:w-auto px-5 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-300 shadow-md">
            <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-3 px-8 rounded-lg shadow-md transition duration-300 transform hover:scale-105">Abone Ol</button>
        </form>
    </section>
</main>

<!-- Alt Kısım (Footer) -->
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

<!-- JavaScript dosyalarını buraya bağlayabilirsiniz (örneğin mobil menü veya dinamik kullanıcı alanı için) -->
<script src="script.js"></script>
</body>
</html>

