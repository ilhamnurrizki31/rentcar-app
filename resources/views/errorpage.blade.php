<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Access Denied</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <h1>Oops!</h1>
                    <h2>Access Denied</h2>
                    <div class="error-details">
                        Sorry, you don't have permission to access this page.
                    </div>
                    <div class="error-actions mt-4">
                        <a href="{{ auth()->check() ? (auth()->user()->role === 'admin' ? '/dashboardadmin' : '/dashboard') : '/' }}" class="btn btn-primary btn-lg">
                            <i class="bi bi-house-door"></i> Take Me Home
                        </a>
                        <a href="/contact" class="btn btn-outline-secondary btn-lg">
                            <i class="bi bi-envelope"></i> Contact Support
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
