<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Dashboard Page
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
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
        color: #1a2a44; /* Ubah warna ikon kalender */
    }

    .home-icon {
        color: #306194; /* Ubah warna ikon home */
    }
  </style>
 </head>
 <body class="bg-gray-100 font-roboto">
  <div class="bg-[#192f46] text-white p-4">
   <div class="flex justify-between items-center">
    <div class="flex items-center space-x-2">
     <img alt="School Logo" class="w-12 h-12 rounded-full" height="40" src="/img/logo smkn 3 cimahi.png" width="40"/>
    </div>
    <div class="flex-1 text-center">
     <div class="text-xl font-bold">
      Presensi Online
     </div>
     <div class="text-lg">
      SMK Negeri 3 Cimahi
     </div>
    </div>

    <!-- Tombol logout Start -->
    <div class="flex items-center space-x-2">
      <a href="/guru/login/" class="text-2xl" title="Logout">
        <i class="fas fa-sign-out-alt"></i>
      </a>
    </div>      
    <!-- Tombol logout End -->

   </div>
   <div class="flex items-center mt-4">
    <div class="flex-1">
     <div class="text-lg font-bold">
      Agung Tauhid
     </div>
     <div class="text-sm">
      Guru
     </div>
    </div>
    <img alt="Profile Picture" class="w-12 h-12 rounded-full" height="50" src="https://storage.googleapis.com/a1aa/image/fImrG2DWoXXBda8JiPtUPOF63eg3bnlfziFshnji56cVCKQnA.jpg" width="50"/>
   </div>
  </div>
  <div class="p-4">
   <div class="grid grid-cols-3 gap-4 mb-4">
    <div class="bg-blue-200 text-blue-800 p-4 rounded-lg text-center">
     <div class="text-sm">
      Jumlah Hadir
     </div>
     <div class="text-lg font-bold">
      45/100
     </div>
    </div>
    <div class="bg-red-200 text-red-800 p-4 rounded-lg text-center">
     <div class="text-sm">
      Jumlah tanpa Ket.
     </div>
     <div class="text-lg font-bold">
      34
     </div>
    </div>
    <div class="bg-green-200 text-green-800 p-4 rounded-lg text-center">
     <div class="text-sm">
      Jumlah Izin
     </div>
     <div class="text-lg font-bold">
      14
     </div>
    </div>
   </div>
    <!-- Surat Masuk Start -->
    <a href="/guru/surat-masuk/" class="block bg-white p-4 rounded-lg shadow flex items-center justify-between">
        <div class="flex items-center space-x-2">
        <div class="bg-green-100 p-2 rounded-full">
            <i class="fas fa-file-alt text-green-500"></i>
        </div>
        <div>
            <div class="text-sm font-bold">Surat Masuk</div>
            <div class="text-xs text-gray-500">Surat Izin yang Masuk</div>
        </div>
        </div>
        <i class="fas fa-chevron-right text-gray-500"></i>
    </a>
    <!-- Surat Masuk End -->
    </div>

  <!-- Navbar Start -->
  <div class="footer">
    <div class="footer-item">
      <a href="/guru/dashboard/" class="flex flex-col items-center">
        <i class="fas fa-home home-icon"></i>
        <div>Dashboard</div>
      </a>
    </div>
    <div class="footer-item">
      <a href="/guru/jadwal/" class="flex flex-col items-center">
        <i class="fas fa-calendar-alt calendar-icon"></i>
        <div>Jadwal</div>
      </a>
    </div>
    <div class="footer-item active">
      <a href="/guru/cek-presensi/" class="flex flex-col items-center">
        <div class="presence-logo">
          <i class="fas fa-users"></i>
        </div>
        <div class="presence-logo-text" style="margin-top: 40px;"> Cek Presensi</div>
      </a>
    </div>
    <div class="footer-item">
      <a href="/guru/akun/" class="flex flex-col items-center">
        <i class="fas fa-user"></i>
        <div>Akun</div>
      </a>
    </div>
    <div class="footer-item">
      <a href="/guru/surat-masuk/" class="flex flex-col items-center">
        <i class="fas fa-envelope"></i>
        <div>Surat Masuk</div>
      </a>
    </div>
  </div>
  <!-- Navbar End -->

 </body>
</html>
