<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Akun Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
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
      background-color: #1a2a44;
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

    .calendar-icon {
      color: #1a2a44;
    }

    .home-icon {
      color: #1a2a44;
    }

    .user-icon {
      color: #306194;
    }
  </style>
</head>
<body class="bg-gray-100 font-roboto">

  <div class="bg-[#192f46] text-white p-4">
    <div class="flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <img src="/img/logo smkn 3 cimahi.png" alt="School Logo" class="w-12 h-12 rounded-full" width="40" height="40" />
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

  <div class="bg-[#192f46] text-white p-2 rounded-3xl mt-4 mx-4 h-[600px]">
    <div class="text-center">
      <h1 class="text-xl font-bold">Profile</h1>
      <img src="https://storage.googleapis.com/a1aa/image/91iLIOeG7QVtDiDYCrFbWIwYOstgopoUnZcQmmWXhLeKTGoTA.jpg" alt="Profile Picture" class="rounded-full mx-auto mt-4" width="100" height="100" />
    </div>
    <div class="bg-white text-black p-4 mt-4 rounded-lg">
      <h2 class="font-bold">Informasi Diri</h2>
      <div class="mt-2">
        <div class="flex">
          <div class="w-1/3 font-semibold">Nama Lengkap: </div>
          <div class="w-2/3">Agung Tauhid</div>
        </div>
        <div class="flex mt-2">
          <div class="w-1/3 font-semibold">NISN: </div>
          <div class="w-2/3">740049</div>
        </div>
        <div class="flex mt-2">
          <div class="w-1/3 font-semibold">Alamat: </div>
          <div class="w-2/3">Jl. Cipedes Atas No.78, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40152</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar Start -->
  <div class="footer">
    <div class="footer-item">
      <a href="/dashboard" class="flex flex-col items-center">
        <i class="fas fa-home home-icon"></i>
        <div>Dashboard</div>
      </a>
    </div>
    <div class="footer-item">
      <a href="/jadwal" class="flex flex-col items-center">
        <i class="fas fa-calendar-alt calendar-icon"></i>
        <div>Jadwal</div>
      </a>
    </div>
    <div class="footer-item active">
      <a href="/presensi" class="flex flex-col items-center">
        <div class="presence-logo">
          <i class="fas fa-camera"></i>
        </div>
        <div class="presence-logo-text" style="margin-top: 40px;">Presensi</div>
      </a>
    </div>
    <div class="footer-item">
      <a href="/akun" class="flex flex-col items-center">
        <i class="fas fa-user user-icon"></i>
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
