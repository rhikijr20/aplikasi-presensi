<html>
<head>
  <title>Surat Masuk Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
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
        color: #306194;
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
        color: #1a2a44;
    }

    .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #4caf50;
        color: white;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: none;
        z-index: 1000;
    }

    .notification.show {
        display: block;
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
        <a href="/guru/login/" class="text-2xl" title="Logout">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </div>      
      <!-- Tombol logout End -->
      
    </div>
  </div>

    <!-- Main Content -->
    <div class="p-4">
      <div class="bg-[#1c3148] rounded-lg max-w-full mx-auto p-4">
      <h2 class="text-xl font-semibold text-white mb-4">Surat Masuk</h2>
      <div class="space-y-4">
        <div class="bg-white rounded-lg shadow p-4 flex flex-col sm:flex-row items-center justify-between">
        <div class="flex items-center">
          <img alt="Student Photo" class="h-12 w-12 rounded-full" height="50" src="https://storage.googleapis.com/a1aa/image/iq7EgHAelIwcSCii3VmA0SqEVPrh2d8rXSF2RLfbRsmtStvTA.jpg" width="50"/>
          <div class="ml-3">
          <p class="text-gray-800 font-semibold">Nama Siswa</p>
          <p class="text-gray-500 text-sm">Alasan Izin ..........</p>
          </div>
        </div>
        <div class="flex items-center mt-4 sm:mt-0">
          <button onclick="showNotification()" class="bg-teal-500 text-white px-4 py-2 rounded-full">Kirim Surat</button>
          <i class="fas fa-envelope text-gray-400 text-2xl ml-4"></i>
        </div>
        </div>
      </div>
      </div>
    </div>

    <!-- Notification -->
    <div id="notification" class="notification">
      Surat berhasil dikirim!
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
          <i class="fas fa-user user-icon"></i>
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

    <script>
      function showNotification() {
          console.log('showNotification called');
          const notification = document.getElementById('notification');
          notification.classList.add('show');
          setTimeout(() => {
              notification.classList.remove('show');
          }, 3000); // Hide after 3 seconds
      }
    </script>
</body>
</html>
