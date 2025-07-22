<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benim Kişisel Blogum - İletişim</title>
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
<body class="bg-gray-100 text-gray-800">

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
            <a href="{{route('blog')}}" class="text-gray-700 hover:text-indigo-600 font-medium transition duration-300">Blog Yazıları</a>
            <a href="{{route('ilet')}}" class="text-indigo-600 font-medium transition duration-300">İletişim</a>
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

<main class="py-8">
    <section class="container mx-auto px-4 bg-white p-8 rounded-xl shadow-lg mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-8 text-center">İletişim</h2>
        <p class="text-lg text-gray-700 mb-8 text-center max-w-2xl mx-auto">Sorularınız, işbirlikleri veya geri bildirimleriniz için aşağıdaki formu doldurarak bana ulaşabilirsiniz. En kısa sürede size geri dönüş yapacağım.</p>

        <div class="max-w-xl mx-auto">
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Adınız Soyadınız</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-posta Adresiniz</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Konu</label>
                    <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Mesajınız</label>
                    <textarea id="message" name="message" rows="5" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                </div>
                <div>
                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300 transform hover:scale-105">Mesajı Gönder</button>
                </div>
            </form>
        </div>

        <div class="mt-12 text-center">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Alternatif İletişim Kanalları</h3>
            <p class="text-lg text-gray-700 mb-2">Doğrudan e-posta göndermek için: <a href="mailto:info@benimblogum.com" class="text-indigo-600 hover:underline">info@benimblogum.com</a></p>
            <div class="flex justify-center space-x-6 mt-4">
                <a href="#" target="_blank" class="text-indigo-600 hover:text-indigo-800 transition duration-300 text-lg">Facebook</a>
                <a href="#" target="_blank" class="text-indigo-600 hover:text-indigo-800 transition duration-300 text-lg">X (Twitter)</a>
                <a href="#" target="_blank" class="text-indigo-600 hover:text-indigo-800 transition duration-300 text-lg">LinkedIn</a>
            </div>
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
