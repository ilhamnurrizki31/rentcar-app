<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <title>Register Form</title>
    <link rel="icon" type="image/png" href="{{ asset('cars.png') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 500px;
            width: 100%;
        }
        .register-card h2 {
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
        }
        .form-control:focus {
            border-color: #fda085;
            box-shadow: 0 0 5px rgba(106, 17, 203, 0.5);
        }
        .btn-register {
            background: #fda085;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            width: 100%;
            font-size: 16px;
            transition: background 0.3s ease;
        }
        .btn-register:hover {
            background: #fc8d25;
        }
        .form-text {
            color: #666;
            font-size: 14px;
        }
        .form-text a {
            color: #6a11cb;
            text-decoration: none;
        }
        .form-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-card">
        <h2 class="text-center">Daftar Akun Baru</h2>
        <form action="{{ route('register-submit') }}" method="POST" id="registerForm">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Kata Sandi" autocomplete="new-password" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password_confirmation"  placeholder="Konfirmasi Kata Sandi" autocomplete="new-password" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="address"  id="address" placeholder="Alamat" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Nomor Handphone" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="sim_number" id="sim_number" placeholder="Nomor SIM A" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label" for="terms">
                    Saya setuju dengan <a href="#">Syarat dan Ketentuan</a>
                </label>
            </div>
            <button type="submit" class="btn btn-register">Daftar</button>

            <p class="form-text text-center mt-3">
                Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a>
            </p>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- SweetAlert2 for interactive alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registerForm');

    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const password = form.querySelector('input[name="password"]').value;
            const passwordConfirmation = form.querySelector('input[name="password_confirmation"]').value;

            // Cek kesesuaian kata sandi
            if (password !== passwordConfirmation) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Kata sandi dan konfirmasi kata sandi tidak cocok!',
                });
                return; // Hentikan proses jika tidak sesuai
            }

            const formData = new FormData(form);

            // Ambil CSRF token dari meta tag
            const csrfToken = document.querySelector('meta[name="csrf-token"]');

            if (!csrfToken) {
                console.error('CSRF token tidak ditemukan!');
                return;
            }

            fetch(form.action, {
                method: form.method,
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken.content, // Gunakan CSRF token
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(err => Promise.reject(err));
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Pendaftaran Berhasil!',
                        text: data.message,
                        confirmButtonText: 'Lanjutkan',
                    }).then(() => {
                        window.location.href = '/login'; // Redirect ke halaman login
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: data.message,
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: error.message || 'Terjadi kesalahan saat mengirim data.',
                });
            });
        });
    } else {
        console.error('Form dengan ID registerForm tidak ditemukan!');
    }
});
    </script>
</body>
</html>