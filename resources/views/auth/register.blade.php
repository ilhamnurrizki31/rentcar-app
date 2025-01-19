<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Car Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 1rem;
        }
        .signup-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .signup-header h2 {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .input-group {
            margin-bottom: 1.5rem;
        }
        .input-group-text {
            background: transparent;
            border-right: none;
        }
        .form-control {
            border-left: none;
            padding: 0.75rem;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #ced4da;
        }
        .btn-custom {
            background: linear-gradient(45deg, #84fab0 0%, #8fd3f4 100%);
            border: none;
            padding: 0.75rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .form-section {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .form-section h4 {
            color: #2c3e50;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }
        .progress {
            height: 8px;
            margin-bottom: 2rem;
        }
        .progress-bar {
            background: linear-gradient(45deg, #84fab0 0%, #8fd3f4 100%);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="glass-card">
                    <div class="signup-header">
                        <h2>Create Account</h2>
                        <p class="text-muted">Join our car rental community</p>
                    </div>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                    </div>

                    <form method="POST" action="{{ route('register') }}" id="registerForm">
                        @csrf
                        <div class="form-section">
                            <h4>Personal Information</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-section">
                            <h4>Contact Details</h4>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                </span>
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <textarea name="address" class="form-control" placeholder="Address" rows="2" required></textarea>
                            </div>
                        </div>

                        <div class="form-section">
                            <h4>Driver Information</h4>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-id-card"></i>
                                </span>
                                <input type="text" name="sim_number" class="form-control" placeholder="Driver's License Number" required>
                            </div>
                        </div>

                        <div class="form-section">
                            <h4>Security</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-custom w-100">Create Account</button>
                    </form>

                    <div class="text-center mt-4">
                        <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const totalFields = $('#registerForm input, #registerForm textarea').length;
            let filledFields = 0;

            $('#registerForm input, #registerForm textarea').on('input', function() {
                filledFields = $('#registerForm input:filled, #registerForm textarea:filled').length;
                const progress = (filledFields / totalFields) * 100;
                $('.progress-bar').css('width', progress + '%');
            });
        });
    </script>
</body>
</html>