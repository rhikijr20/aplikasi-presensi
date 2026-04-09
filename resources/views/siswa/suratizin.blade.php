<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Izin Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        .footer {
            background-color: white;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            display: flex;
            justify-content: space-around;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }
        .footer .footer-item {
            text-align: center;
            color: #1a2a44;
            position: relative;
            flex: 1;
        }
        .footer .footer-item i {
            display: block;
            font-size: 24px;
        }
        .footer .footer-item div {
            font-size: 12px;
            margin-top: 10px;
        }
        .footer .presence-logo {
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #1a2a44;
            border-radius: 50%;
            padding: 15px;
            text-align: center;
        }
        .footer .presence-logo i {
            font-size: 24px;
            color: white;
        }
        .evenlope-icon {
            color: #306194;
        }
    </style>
</head>
<body class="bg-gray-100 font-roboto">
    <!-- Header -->
    <div class="bg-[#192f46] text-white p-4">
        <div class="flex justify-between items-center">
            <img src="/img/logo smkn 3 cimahi.png" alt="School Logo" class="w-10 h-10 rounded-full" />
            <div class="flex-1 text-center">
                <h1 class="text-xl font-bold">Presensi Online</h1>
                <p class="text-lg">SMK Negeri 3 Cimahi</p>
            </div>
            <a href="/login" class="text-2xl" title="Logout">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
    </div>

    <!-- Content -->
    <div class="p-4 flex-grow">
        <div class="bg-[#172d44] text-white p-4 rounded-t-3xl">
            <h1 class="text-lg font-semibold">Buat Surat Izin</h1>
        </div>
        <div class="bg-[#172d44] p-4 rounded-b-3xl shadow-lg overflow-y-auto max-h-[30rem]">
            <div class="mb-4 bg-white p-4 rounded-lg">
                <h2 class="text-gray-700 font-semibold mb-2">Informasi Diri</h2>
                <hr class="border-gray-300 mb-4" />
                <div class="bg-gray-100 p-4 rounded-lg">
                    <div class="mb-2"><span class="font-semibold">Nama Lengkap:</span> Agung Tauhid</div>
                    <div class="mb-2"><span class="font-semibold">NISN:</span> 740049</div>
                    <div class="mb-2"><span class="font-semibold">Alamat:</span> JL. Cipedes Atas No.78, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40152</div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg">
                <h2 class="text-gray-700 font-semibold mb-2">Alasan Izin</h2>
                <hr class="border-gray-300 mb-4" />
                <div class="bg-gray-100 p-4 rounded-lg">
                    <div class="mb-2">
                        <label class="block text-gray-700 font-semibold">Tujuan Surat</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg" readonly value="Wali Kelas 12 DKV 1" />
                    </div>
                    <div class="mb-2">
                        <label class="block text-gray-700 font-semibold">Alasan <span class="text-red-500">*</span></label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Wajib isi!" />
                    </div>
                    <div class="mb-2">
                        <label class="block text-gray-700 font-semibold">Lampiran <span class="text-red-500">*</span></label>
                        <div id="file-drop-area" class="border-2 border-dashed border-gray-300 p-4 rounded-lg text-center cursor-pointer">
                            <i class="fas fa-plus text-blue-500 text-2xl"></i>
                            <p class="text-gray-500">Drag Files or <span class="text-blue-500 underline cursor-pointer">Browse</span></p>
                            <input type="file" id="file-input" class="hidden" multiple />
                            <div id="file-list" class="text-left mt-2 text-gray-700"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4" style="margin-bottom:70px">
                <button class="w-full bg-[#52bd94] text-white p-2 rounded-lg">Kirim Surat</button>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <div class="footer">
        <div class="footer-item">
            <a href="/dashboard" class="flex flex-col items-center">
                <i class="fas fa-home"></i>
                <div>Dashboard</div>
            </a>
        </div>
        <div class="footer-item">
            <a href="/jadwal" class="flex flex-col items-center">
                <i class="fas fa-calendar-alt"></i>
                <div>Jadwal</div>
            </a>
        </div>
        <div class="footer-item active">
            <a class="flex flex-col items-center" href="/presensi">
                <div class="presence-logo">
                    <i class="fas fa-camera"></i>
                </div>
                <div class="presence-logo-text" style="margin-top: 40px;">Presensi</div>
            </a>
        </div>
        <div class="footer-item">
            <a href="/akun" class="flex flex-col items-center">
                <i class="fas fa-user"></i>
                <div>Akun</div>
            </a>
        </div>
        <div class="footer-item">
            <a href="/suratizin" class="flex flex-col items-center">
                <i class="fas fa-envelope evenlope-icon"></i>
                <div>Buat Surat</div>
            </a>
        </div>
    </div>

    <script>
        const fileDropArea = document.getElementById("file-drop-area");
        const fileInput = document.getElementById("file-input");
        const fileList = document.getElementById("file-list");

        fileDropArea.addEventListener("click", () => fileInput.click());
        fileInput.addEventListener("change", (event) => displayFiles(event.target.files));
        fileDropArea.addEventListener("dragover", (event) => {
            event.preventDefault();
            fileDropArea.classList.add("bg-gray-200");
        });
        fileDropArea.addEventListener("dragleave", () => fileDropArea.classList.remove("bg-gray-200"));
        fileDropArea.addEventListener("drop", (event) => {
            event.preventDefault();
            fileDropArea.classList.remove("bg-gray-200");
            displayFiles(event.dataTransfer.files);
        });

        function displayFiles(files) {
            fileList.innerHTML = "";
            Array.from(files).forEach((file) => {
                const listItem = document.createElement("div");
                listItem.classList.add("mt-2");
                listItem.textContent = file.name;
                fileList.appendChild(listItem);
            });
        }
    </script>
</body>
</html>
