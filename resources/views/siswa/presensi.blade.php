<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Presensi Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <style>
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
        .footer .footer-item.active {
            color: #1a2a44;
        }
        .footer .presence-logo {
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #306194;
            border-radius: 50%;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .footer .presence-logo i {
            font-size: 24px;
            color: white;
        }
        .footer .presence-logo-text {
            margin-top: 40px;
            font-size: 12px;
            color: #1a2a44;
        }
        .calendar-icon, .home-icon, .user-icon {
            color: #1a2a44;
        }
    </style>
</head>
<body class="bg-gray-100 font-roboto">
    <div class="bg-[#192f46] text-white p-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img alt="School Logo" class="w-10 h-10 rounded-full" height="40" src="/img/logo smkn 3 cimahi.png" width="40"/>
            </div>
            <div class="flex-1 text-center">
                <div class="text-xl font-bold">Presensi Online</div>
                <div class="text-lg">SMK Negeri 3 Cimahi</div>
            </div>

            <!-- Tombol logout Start -->
            <div class="flex items-center space-x-2">
                <a href="/login" class="text-2xl" title="Logout">
                <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>      
            <!-- Tombol logout End -->
            
        </div>
    </div>

    <div class="p-4">
        <div class="bg-white rounded-2xl shadow-lg p-4" style="background-color: #172d44;">
            <h2 class="text-xl font-semibold text-white mb-4">Presensi Online</h2>

            <!-- Open Camera -->
            <div class="border rounded-lg overflow-hidden mb-4 bg-white">
                <h3 class="text-lg font-semibold text-gray-700 mb-2 bg-white p-2 rounded-2xl">
                    Ambil Foto Untuk Absensi
                </h3>
                <video id="camera-stream" class="w-full" autoplay playsinline style="display: none;"></video>
                <img id="captured-image" alt="Captured selfie for attendance" class="w-full" style="display: none;" width="300" height="200"/>
                <div class="bg-gray-200 p-2 text-center">
                    <button id="open-camera-button" class="bg-[#52bd94] text-white px-10 py-2 rounded-full">
                        <i class="fas fa-camera"></i> Buka Kamera
                    </button>
                    <button id="capture-button" class="bg-[#52bd94] text-white px-10 py-2 rounded-full" style="display: none;">
                        <i class="fas fa-camera"></i> Ambil Foto
                    </button>
                    <button id="retake-button" class="bg-[#52bd94] text-white px-10 py-2 rounded-full" style="display: none;">
                        <i class="fas fa-redo"></i> Ulangi Foto
                    </button>
                </div>
            </div>

            <script>
                const openCameraButton = document.getElementById('open-camera-button');
                const captureButton = document.getElementById('capture-button');
                const retakeButton = document.getElementById('retake-button');
                const cameraStream = document.getElementById('camera-stream');
                const capturedImage = document.getElementById('captured-image');
                let videoStream;

                openCameraButton.addEventListener('click', async () => {
                    try {
                        videoStream = await navigator.mediaDevices.getUserMedia({ video: true });
                        cameraStream.srcObject = videoStream;
                        cameraStream.style.display = 'block';
                        captureButton.style.display = 'inline-block';
                        openCameraButton.style.display = 'none';
                    } catch (error) {
                        console.error('Error accessing camera:', error);
                        alert('Tidak dapat mengakses kamera.');
                    }
                });

                captureButton.addEventListener('click', () => {
                    const canvas = document.createElement('canvas');
                    canvas.width = cameraStream.videoWidth;
                    canvas.height = cameraStream.videoHeight;
                    const context = canvas.getContext('2d');
                    context.drawImage(cameraStream, 0, 0, canvas.width, canvas.height);
                    capturedImage.src = canvas.toDataURL('image/png');
                    capturedImage.style.display = 'block';
                    cameraStream.style.display = 'none';
                    captureButton.style.display = 'none';
                    retakeButton.style.display = 'inline-block';
                    videoStream.getTracks().forEach(track => track.stop());
                });

                retakeButton.addEventListener('click', () => {
                    capturedImage.style.display = 'none';
                    openCameraButton.style.display = 'inline-block';
                    retakeButton.style.display = 'none';
                });
            </script>

            <!-- Live Location -->
            <div class="border rounded-lg overflow-hidden bg-white">
                <h3 class="text-lg font-semibold text-gray-700 mb-2 bg-white p-2">Lokasi Anda</h3>
                <div id="location-container" class="w-full h-64 bg-gray-200 flex items-center justify-center">
                    <p id="location-status">Mengambil lokasi...</p>
                </div>
            </div>
            <div class="mt-4" style="margin-bottom:70px">
                <button id="submit-attendance-button" class="w-full bg-[#52bd94] text-white p-2 rounded-lg">
                     Ajukan
                </button>
            </div>

            <script>
                const locationContainer = document.getElementById('location-container');
                const locationStatus = document.getElementById('location-status');
                const submitAttendanceButton = document.getElementById('submit-attendance-button');

                submitAttendanceButton.addEventListener('click', () => {
                    alert('Presensi berhasil diajukan!');
                    // Di sini Anda bisa menambahkan logika untuk mengirim data lokasi ke server
                });

                function showMap(latitude, longitude) {
                    const mapUrl = `https://maps.google.com/maps?q=${latitude},${longitude}&z=15&output=embed`;
                    locationContainer.innerHTML = `<iframe src="${mapUrl}" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>`;
                    locationRetrieved = true;
                    checkFormAvailability();
                }

                function getLocation() {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(
                            (position) => {
                                const latitude = position.coords.latitude;
                                const longitude = position.coords.longitude;
                                showMap(latitude, longitude);
                            },
                            (error) => {
                                locationStatus.textContent = "Tidak dapat mengakses lokasi.";
                                console.error('Error getting location:', error);
                            }
                        );
                    } else {
                        locationStatus.textContent = "Geolocation tidak didukung oleh browser Anda.";
                    }
                }

                getLocation();
            </script>
        </div>
    </div>

    <!-- Navbar Start -->
    <div class="footer">
        <div class="footer-item">
            <a class="flex flex-col items-center" href="/dashboard">
                <i class="fas fa-home home-icon"></i>
                <div>Dashboard</div>
            </a>
        </div>
        <div class="footer-item">
            <a class="flex flex-col items-center" href="/jadwal">
                <i class="fas fa-calendar-alt calendar-icon"></i>
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
            <a class="flex flex-col items-center" href="/akun">
                <i class="fas fa-user"></i>
                <div>Akun</div>
            </a>
        </div>
        <div class="footer-item">
            <a href="/suratizin" class="flex flex-col items-center">
              <i class="fas fa-envelope"></i>
              <div>Buat Surat</div>
            </a>
        </div>
    </div>
    <!-- Navbar End -->

</body>
</html>
