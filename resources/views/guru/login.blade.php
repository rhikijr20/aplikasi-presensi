<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Guru Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
      /* Gaya untuk modal */
      .modal {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        display: none;
        justify-content: center;
        align-items: center;
      }

      .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        max-width: 400px;
        width: 100%;
      }

      .modal-content .modal-header {
        font-size: 18px;
        font-weight: bold;
        color: red;
      }

      .modal-content .modal-body {
        font-size: 16px;
        color: #555;
      }

      .modal-content .modal-footer {
        margin-top: 10px;
      }
    </style>
  </head>
  <body class="bg-[#192f46] flex items-center justify-center min-h-screen">
    <!-- Logo Sekolah -->
    <div class="absolute top-20">
      <img alt="Logo Sekolah dengan teks 'SMKN 3 Cimahi' dan lambang" class="w-32 h-32" src="/img/logo smkn 3 cimahi.png"/>
    </div>

    <!-- Form Login -->
    <div class="w-full max-w-xs p-6 bg-white rounded-lg shadow-md mt-32">
      <h2 class="text-center text-xl font-semibold text-black mb-6">Masuk sebagai Guru SMKN 3 Cimahi</h2>
      
      <form id="loginForm">
        <!-- Username Field -->
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
          <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <i class="fas fa-user text-gray-400"></i>
            </span>
            <input 
              class="shadow appearance-none border rounded w-full py-2 px-3 pl-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
              id="username" 
              placeholder="Masukan Username" 
              type="text"/>
          </div>
        </div>

        <!-- Password Field -->
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
          <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <i class="fas fa-lock text-gray-400"></i>
            </span>
            <input 
              class="shadow appearance-none border rounded w-full py-2 px-3 pl-10 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
              id="password" 
              placeholder="Masukan Password" 
              type="password"/>
            <span 
              class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer" 
              id="togglePassword">
              <i class="fas fa-eye text-gray-400" id="eyeIcon"></i>
            </span>
          </div>
        </div>

        <!-- Login Button -->
        <div class="flex items-center justify-center">
          <button type="submit" class="bg-[#192f46] hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Masuk</button>
        </div>
      </form>
    </div>

    <!-- Modal untuk Kesalahan Login -->
    <div class="modal" id="loginErrorModal">
      <div class="modal-content">
        <div class="modal-header text-red-500">
          <i class="fas fa-exclamation-circle"></i> Login Gagal
        </div>
        <div class="modal-body text-sm">
          Username atau password yang Anda masukkan salah.
        </div>
        <div class="modal-footer">
          <button class="bg-red-600 text-white px-4 py-2 rounded" onclick="closeModal()">Tutup</button>
        </div>
      </div>
    </div>

    <script>
      // Menyembunyikan dan menampilkan password saat diklik ikon mata
      const togglePassword = document.getElementById('togglePassword');
      const passwordField = document.getElementById('password');
      const eyeIcon = document.getElementById('eyeIcon');

      togglePassword.addEventListener('click', function () {
        // Mengganti tipe input password menjadi teks atau kembali menjadi password
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);

        // Mengganti ikon mata sesuai dengan tipe password
        if (type === 'text') {
          eyeIcon.classList.remove('fa-eye');
          eyeIcon.classList.add('fa-eye-slash');
        } else {
          eyeIcon.classList.remove('fa-eye-slash');
          eyeIcon.classList.add('fa-eye');
        }
      });

      // Validasi login pada form
      document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah form dikirim sebelum validasi

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Username dan password yang valid (dapat diganti sesuai kebutuhan)
        const validUsername = 'guru';
        const validPassword = '1234';

        // Memeriksa apakah username dan password yang dimasukkan sesuai
        if (username === validUsername && password === validPassword) {
          window.location.href = '/guru/dashboard'; // Arahkan pengguna ke halaman home atau dashboard setelah login
        } else {
          // Tampilkan modal jika login gagal
          document.getElementById('loginErrorModal').style.display = 'flex';
        }
      });

      // Menutup modal error
      function closeModal() {
        document.getElementById('loginErrorModal').style.display = 'none';
      }
    </script>
  </body>
</html>
