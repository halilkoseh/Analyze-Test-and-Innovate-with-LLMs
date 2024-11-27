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
    <div class="font-[sans-serif]">
        <div class="min-h-screen flex fle-col items-center justify-center py-6 px-4">
            <div class="grid md:grid-cols-2 items-center gap-4 max-w-6xl w-full">
                <div
                    class="border border-gray-300 rounded-lg p-6 max-w-md shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] max-md:mx-auto">
                    <form action="{{ route('login.submit') }}" method="POST" class="space-y-4">
                        @csrf

                        <div class="mb-8">
                            <h3 class="text-gray-800 text-3xl font-extrabold">Giriş Yapınız <i class="fa-brands fa-space-awesome ml-4"></i></h3>
                            <p class="text-gray-500 text-sm mt-4 leading-relaxed">LLM Ajanları ile AI Tabanlı
                                Etkileşimli Yazılım Geliştirme Platformu. Yazılım geliştirmek için ihtiyacınız olan her
                                şey.</p>
                        </div>

                        <div>
                            <label for="email" class="text-gray-800 text-sm mb-2 block">Mail Adresi</label>
                            <div class="relative flex items-center">
                                <input id="email" name="email" type="email" required
                                    class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg pr-10 outline-blue-600"
                                    placeholder="İZÜ Mail adresinizi giriniz." oninput="validateEmail()" />
                                <i class="fa-regular fa-envelope absolute right-3 text-gray-500"></i>
                            </div>
                        </div>



                        <div>
                            <label for="password" class="text-gray-800 text-sm mb-2 block">Parola</label>
                            <div class="relative flex items-center">
                                <input id="password" name="password" type="password" required
                                    class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600"
                                    placeholder="Parolanızı Giriniz." />
                                <svg id="togglePassword" xmlns="http://www.w3.org/2000/svg" fill="#bbb"
                                    stroke="#bbb" class="w-[18px] h-[18px] absolute right-4 cursor-pointer"
                                    viewBox="0 0 128 128">
                                    <path
                                        d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                        data-original="#000000"></path>
                                </svg>
                            </div>
                        </div>




                        @if ($errors->any())
                            <div class="text-red-500 text-sm mt-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif





                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox"
                                    class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                                <label for="remember-me" class="ml-3 block text-sm text-gray-800">
                                    Beni Hatırla
                                </label>
                            </div>

                            <script>
                                // Check if the 'Remember Me' is checked and auto-fill the fields on page load
                                window.onload = function() {
                                    const rememberMe = localStorage.getItem("rememberMe") === "true";
                                    const email = localStorage.getItem("email");
                                    const password = localStorage.getItem("password");

                                    if (rememberMe) {
                                        document.getElementById("email").value = email;
                                        document.getElementById("password").value = password;
                                        document.getElementById("remember-me").checked = true;
                                    }
                                };

                                // Handle the 'Remember Me' checkbox state change
                                document.getElementById("remember-me").addEventListener("change", function() {
                                    const email = document.getElementById("email").value;
                                    const password = document.getElementById("password").value;

                                    if (this.checked) {
                                        // Save the email, password, and checkbox state to localStorage
                                        localStorage.setItem("email", email);
                                        localStorage.setItem("password", password);
                                        localStorage.setItem("rememberMe", "true");
                                    } else {
                                        // Remove the data from localStorage if unchecked
                                        localStorage.removeItem("email");
                                        localStorage.removeItem("password");
                                        localStorage.setItem("rememberMe", "false");
                                    }
                                });
                            </script>

                            <div class="text-sm">
                                <a href="jajvascript:void(0);" class="text-blue-600 hover:underline font-semibold">
                                    Şifrenizi mi Unuttunuz ? </a>
                            </div>
                        </div>

                        <div class="mt-8">
                            <button type="submit"
                                class="w-full shadow-xl py-3 px-4 text-sm tracking-wide rounded-lg text-white bg-[#185BCC] hover:bg-blue-600 focus:outline-none">
                                Giriş Yap
                            </button>

                        </div>

                        <p class="text-sm !mt-8 text-center text-gray-800">Hesabınız yok mu? <a
                                href="{{ url('signup') }}"
                                class="text-blue-600 font-semibold hover:underline ml-1 whitespace-nowrap">Kayıt Ol
                                !</a></p>
                    </form>
                </div>

                <div class="lg:h-[400px] md:h-[300px] max-md:mt-8">
                    <img src="images/wallpaper1.png" class="w-full h-full max-md:w-4/5 mx-auto block object-cover"
                        alt="Dining Experience" />
                </div>
            </div>
        </div>
    </div>


    <script>
        // Parola gizleme ve gösterme işlemi
        document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordInput = document.getElementById('password');
            // Eğer parola gizleniyorsa, göster
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                // Eğer parola gösteriliyorsa, gizle
                passwordInput.type = 'password';
            }
        });

    </script>
</body>

</html>
