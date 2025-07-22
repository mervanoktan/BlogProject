<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benim Kişisel Blogum - Hakkımda</title>
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
            <a href="{{route('hakkımda')}}" class="text-indigo-600 font-medium transition duration-300">Hakkımda</a>
            <a href="{{route('blog')}}" class="text-gray-700 hover:text-indigo-600 font-medium transition duration-300">Blog Yazıları</a>
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
        <h2 class="text-4xl font-bold text-gray-900 mb-8 text-center">Hakkımda</h2>
        <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
            <div class="flex-shrink-0">
                <img src="https://placehold.co/250x250/a78bfa/ffffff?text=Profil+Resmi" alt="Profil Resmi" class="rounded-full w-48 h-48 object-cover shadow-md border-4 border-indigo-300">
            </div>
            <div class="text-lg text-gray-700 leading-relaxed">
                <p class="mb-4">Merhaba! Ben [Adınız Soyadınız]. Bu blog, yazılım geliştirme, teknoloji trendleri, kişisel gelişim ve hayatın farklı alanlarındaki deneyimlerimi ve düşüncelerimi paylaştığım kişisel bir platformdur.</p>
                <p class="mb-4">Yazılıma olan tutkum çocukluk yaşlarımdan beri devam ediyor. Üniversite yıllarımda [Bölüm Adı] okuduktan sonra, [Şirket Adı] gibi yerlerde [Pozisyon] olarak çalıştım. Bu süreçte edindiğim bilgi ve birikimi, daha fazla kişiye ulaştırmak ve öğrenme yolculuğumda edindiğim dersleri paylaşmak amacıyla bu blogu açtım.</p>
                <p class="mb-4">Burada sadece teknik konulara değil, aynı zamanda problem çözme becerileri, üretkenlik, yeni teknolojilere adaptasyon ve günlük yaşamda karşılaştığım ilginç konulara da değiniyorum. Amacım, bilgiye aç olan herkes için ilham verici ve faydalı bir kaynak oluşturmak.</p>
                <p>Umarım burada paylaştığım içerikler size değer katar ve yeni şeyler keşfetmenize yardımcı olur. Sorularınız veya geri bildirimleriniz için <a href="iletisim.html" class="text-indigo-600 hover:underline font-medium">İletişim</a> sayfasından bana ulaşmaktan çekinmeyin!</p>
            </div>
        </div>
        <div class="mt-10 text-center">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">İlgi Alanlarım</h3>
            <ul class="flex flex-wrap justify-center gap-4 text-gray-700">
                <li class="bg-indigo-100 text-indigo-800 px-4 py-2 rounded-full shadow-sm">Web Geliştirme</li>
                <li class="bg-indigo-100 text-indigo-800 px-4 py-2 rounded-full shadow-sm">Yapay Zeka</li>
                <li class="bg-indigo-100 text-indigo-800 px-4 py-2 rounded-full shadow-sm">Veri Bilimi</li>
                <li class="bg-indigo-100 text-indigo-800 px-4 py-2 rounded-full shadow-sm">Kişisel Gelişim</li>
                <li class="bg-indigo-100 text-indigo-800 px-4 py-2 rounded-full shadow-sm">Kitap Okuma</li>
                <li class="bg-indigo-100 text-indigo-800 px-4 py-2 rounded-full shadow-sm">Doğa Yürüyüşleri</li>
            </ul>
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
