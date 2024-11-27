<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>

    <title>YZ Tez Programı</title>
    <link rel="icon" href="images/favicon1.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="">
    <div class="font-[sans-serif] bg-gray-50 flex items-center md:h-screen p-4">
        <div class="w-full max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 gap-16 bg-white shadow w-full sm:p-8 p-6 rounded-xl relative">
                <div>
                    <div class="mb-16 justify-center items-center flex">
                        <img src="images/favicon1.png" alt="logo" class="w-40 inline-block" />
                    </div>

                    <div class="space-y-8">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 bg-blue-600 fill-white rounded-full p-1 shrink-0" viewBox="0 0 24 24">
                                <path
                                    d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                    data-original="#000000"></path>
                            </svg>
                            <h4 class="text-gray-800 text-base font-semibold">Çok Dilli Kodlama Desteği</h4>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 bg-blue-600 fill-white rounded-full p-1 shrink-0" viewBox="0 0 24 24">
                                <path
                                    d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                    data-original="#000000"></path>
                            </svg>
                            <h4 class="text-gray-800 text-base font-semibold">Gelişmiş Kod Analizi ve Yorumlama</h4>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 bg-blue-600 fill-white rounded-full p-1 shrink-0" viewBox="0 0 24 24">
                                <path
                                    d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                    data-original="#000000"></path>
                            </svg>
                            <h4 class="text-gray-800 text-base font-semibold">Otomatik Birim ve Arayüz Testi</h4>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 bg-blue-600 fill-white rounded-full p-1 shrink-0" viewBox="0 0 24 24">
                                <path
                                    d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                    data-original="#000000"></path>
                            </svg>
                            <h4 class="text-gray-800 text-base font-semibold">Akıllı ve Etkileşimli Kodlama Asistanları
                            </h4>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 bg-blue-600 fill-white rounded-full p-1 shrink-0" viewBox="0 0 24 24">
                                <path
                                    d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                    data-original="#000000"></path>
                            </svg>
                            <h4 class="text-gray-800 text-base font-semibold">Hızlı Prototip Geliştirme</h4>
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Kayıt Ol</h2>

                    @if ($errors->any())
                        <div class="bg-red-100 text-red-600 p-4 rounded-md mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('register') }}" method="POST" id="registerForm">
                        @csrf

                        <!-- İsim Alanı -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Adınız ve
                                Soyadınız</label>
                            <input type="text" name="name" id="name"
                                placeholder="Adınızı ve soyadınızı giriniz"
                                class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                required>
                        </div>

                        <!-- Email Alanı -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">E-posta Adresi</label>
                            <input type="email" name="email" id="email"
                                placeholder="İZÜ mail adresinizi giriniz"
                                class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                required>
                        </div>

                        <!-- Parola Alanı -->
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">Parola</label>
                            <input type="password" name="password" id="password" placeholder="Parolanızı giriniz"
                                class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                required>
                        </div>

                        <!-- Parola Tekrar Alanı -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Parola
                                Onayı</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="Parolanızı tekrar giriniz"
                                class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                required>
                        </div>

                        <!-- Hata Mesajı -->
                        <div id="error-message" class="text-red-500 text-sm hidden mt-4 mb-4">Parolalar eşleşmiyor. Lütfen tekrar
                            deneyin.</div>

                        <!-- Kayıt Ol Butonu -->
                        <button type="submit"
                            class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            Kayıt Ol
                        </button>
                    </form>

                    <script>
                        // Formu ve inputları alıyoruz
                        document.getElementById('registerForm').addEventListener('submit', function(event) {
                            event.preventDefault(); // Formun normal şekilde gönderilmesini engelle

                            // Parolaları al
                            const password = document.getElementById('password').value;
                            const passwordConfirmation = document.getElementById('password_confirmation').value;

                            // Hata mesajı öğesini al
                            const errorMessage = document.getElementById('error-message');

                            // Parolalar eşleşiyor mu diye kontrol et
                            if (password !== passwordConfirmation) {
                                errorMessage.classList.remove('hidden'); // Hata mesajını göster
                            } else {
                                errorMessage.classList.add('hidden'); // Hata mesajını gizle
                                // Formu normal şekilde gönder
                                this.submit();
                            }
                        });
                    </script>

                    <p class="mt-4 text-center text-sm text-gray-600">
                        Zaten bir hesabınız var mı?
                        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Giriş Yap</a>
                    </p>
                </div>
                <div class="divider absolute left-0 right-0 mx-auto w-1 h-full border-l border-gray-400 max-md:hidden">
                </div>
            </div>
        </div>
    </div>





    <script>
        function validateEmail() {
            const emailInput = document.getElementById("email");
            const registerButton = document.getElementById("registerButton");
            const izuDomain = "izu.edu.tr";
            const regex = /izu\.edu\.tr/;

            // Kontrol: Email "izu.edu.tr" içeriyor mu?
            if (regex.test(emailInput.value)) {
                // Doğru: Butonu aktif yap ve kenarlığı gri yap
                registerButton.disabled = false;
                emailInput.classList.remove("border-red-500");
                emailInput.classList.add("border-gray-300");
            } else {
                // Yanlış: Butonu pasif yap ve kenarlığı kırmızı yap
                registerButton.disabled = true;
                emailInput.classList.remove("border-gray-300");
                emailInput.classList.add("border-red-500");
            }
        }
    </script>
</body>

</html>
