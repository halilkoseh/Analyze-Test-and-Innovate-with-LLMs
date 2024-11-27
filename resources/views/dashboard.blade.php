<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>YZ Tez Programı</title>
    <link rel="icon" href="images/favicon1.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    body {
        font-family: "Poppins", sans-serif;
    }
</style>

<body class="bg-gray-900 text-gray-100 h-screen flex flex-col">
    <div class="flex-grow">
        <div class="grid grid-cols-12 gap-6 p-6 h-full">
            <div class="col-span-2 bg-gray-800 flex flex-col rounded-lg shadow-lg">
                <div class="p-4 font-bold text-xl text-center border-b border-gray-700">Chat History <i
                        class="fa-solid fa-clock-rotate-left ml-4"></i></div>
                <div class="flex-grow overflow-auto">
                    <ul class="space-y-3 p-4">
                        <li
                            class="bg-gray-700 hover:bg-gray-600 p-3 rounded-lg cursor-pointer transition flex justify-between items-center">
                            <span class="text-gray-200 font-medium">Chat 1</span>
                            <i class="fa-solid fa-bars text-gray-400 hover:text-gray-200 transition"></i>
                        </li>
                        <li
                            class="bg-gray-700 hover:bg-gray-600 p-3 rounded-lg cursor-pointer transition flex justify-between items-center">
                            <span class="text-gray-200 font-medium">Chat 2</span>
                            <i class="fa-solid fa-bars text-gray-400 hover:text-gray-200 transition"></i>
                        </li>
                        <li
                            class="bg-gray-700 hover:bg-gray-600 p-3 rounded-lg cursor-pointer transition flex justify-between items-center">
                            <span class="text-gray-200 font-medium">Chat 3</span>
                            <i class="fa-solid fa-bars text-gray-400 hover:text-gray-200 transition"></i>
                        </li>
                    </ul>
                </div>

                <div class="p-4 border-t border-gray-700">
                    <button
                        class="w-full bg-green-600 text-white font-bold py-2 rounded-lg hover:bg-green-500 transition">Start
                        New Chat <i class="fa-solid fa-plus ml-2"></i></button>
                </div>

                <div
                    class="p-4 border-t border-gray-700 flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0">
                    <div class="flex flex-col items-center md:items-start flex-1">
                        <p class="text-sm md:text-base text-gray-300 break-words w-full">
                            {{ auth()->user()->name }}
                        </p>
                        <p class="text-xs md:text-sm text-gray-400 break-words w-full">
                            {{ auth()->user()->email }}
                        </p>
                    </div>

                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white transition text-sm md:text-base">
                            <i class="fa-solid fa-gear"></i>
                        </a>

                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit"
                                class="text-gray-400 hover:text-red-500 transition text-sm md:text-base">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Chat Bölümü -->
            <div class="col-span-7 bg-gray-800 flex flex-col rounded-lg shadow-lg">
                <div class="p-4 font-bold text-xl border-b border-gray-700 text-center">Chat <i
                        class="fa-solid fa-comment-dots ml-4"></i></div>

                <div id="chat-window" class="flex-grow overflow-auto p-6 space-y-4 bg-[#1F2937]">
                    <div class="flex justify-end">
                        <div class="bg-blue-600 text-white p-4 rounded-xl max-w-lg shadow-md">Can you explain my code?
                        </div>
                    </div>
                    <div class="flex justify-start">
                        <div class="bg-gray-700 text-gray-200 p-4 rounded-xl max-w-lg shadow-md">
                            The system response will appear here. I have adjusted the box width for long texts and it
                            will be readable without scrolling.
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-gray-800 border-t border-gray-700 flex items-center space-x-3">
                    <input id="messageinput" type="text"
                        class="flex-grow bg-[#111827] text-sm text-gray-100 p-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Send message to AI Thesis Program application..." />
                    <button id="sendbutton"
                        class="bg-blue-600 text-white px-5 py-3 rounded-lg hover:bg-blue-500 font-bold transition">
                        <i class="fa-regular fa-paper-plane font-bold"></i>
                    </button>
                </div>
            </div>

            <!-- Derleme Çıktıları -->
            <div class="col-span-3 bg-gray-800 flex flex-col rounded-lg shadow-lg">
                <div class="p-4 font-bold text-xl text-center border-b border-gray-700">Compiler <i
                        class="fa-solid fa-code ml-4"></i></div>

                <div class="flex-grow overflow-auto p-6 bg-[#1F2937] justify-start">
                    <div
                        class="output-container bg-gray-900 w-96 text-gray-100 font-mono text-sm p-4 rounded-lg shadow-lg overflow-auto mt-4 border border-gray-700">
                        <pre id="output-text">Output will appear here.</pre>
                    </div>
                </div>

                <div class="p-4 bg-gray-800 border-t border-gray-700 flex items-center space-x-3">
                    <textarea id="message-input"
                        class="flex-grow bg-[#111827] text-sm text-gray-100 p-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Type your code here..." rows="1" style="resize: none; overflow: hidden;"
                        oninput="autoResize(this)"></textarea>

                    <script>
                        function autoResize(element) {
                            element.style.height = "auto"; // İlk olarak yüksekliği sıfırlıyoruz
                            element.style.height = element.scrollHeight + "px"; // İçeriğin yüksekliğine göre yeni yüksekliği ayarlıyoruz
                        }
                    </script>

                    <button id="send-button"
                        class="bg-blue-600 text-white px-5 py-3 rounded-lg hover:bg-blue-500 font-bold transition">
                        <i class="fa-solid fa-terminal"></i> </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-[#1F2937] text-gray-100 text-sm py-2 flex justify-center items-center">
        AI Thesis Program may make mistakes. Check important information.
    </div>

    <script>
        document.getElementById("send-button").addEventListener("click", async () => {
            const codeInput = document.getElementById("message-input").value;

            try {
                const response = await fetch("/compile-code", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: JSON.stringify({
                        code: codeInput,
                    }),
                });

                const data = await response.json();
                const outputText = document.getElementById("output-text");

                if (response.ok) {
                    // Başarı durumunda çıktıyı göster
                    outputText.textContent = `\n${data.output}\n\nSaved File: ${data.file}`;
                } else {
                    // Hata durumunda hata mesajını göster
                    outputText.textContent = `Error:\n${data.output}\n\nSaved File: ${data.file}`;
                    outputText.classList.add("text-red-500"); // Hata durumunda kırmızı renk
                }
            } catch (error) {
                const outputText = document.getElementById("output-text");
                outputText.textContent = `Client Error: ${error.message}`;
                outputText.classList.add("text-red-500"); // Ağı hata durumunda kırmızı renk
            }
        });
    </script>
</body>

</html>
