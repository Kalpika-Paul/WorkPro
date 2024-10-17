<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WorkPro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-box h1 {
            color: #033468;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-control:focus {
            border-color: #0a4483;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #1c4674;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .footer-text {
            text-align: center;
            margin-top: 20px;
        }
        .footer-text a {
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-box">

        <h1>WorkPro Login</h1>
        @if (session()->has("success"))
        <div class="alert alert-success">
            {{ session()->get("success") }}
        </div>
    @endif
    
    @if (session()->has("error"))
        <div class="alert alert-danger">
            {{ session()->get("error") }}
        </div>
    @endif
    
    <form method="POST" action="{{ route('frontend.loginpost') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
    
        <div class="mb-3">
            <label for="department" class="form-label">Select Department</label>
            <select class="form-control" id="department" name="dept" required>
                <option value="">Select your department</option>
                <option value="Business">Business</option>
                <option value="Design">Design</option>
                <option value="Web Development">Web Development</option>
                <option value="App Development">App Development</option>
                <option value="Digital Marketing">Digital Marketing</option>
               
            </select>
        </div>
    
        <button type="submit" class="btn btn-primary">Login</button>

        <div class="mt-3">
            <p>Don't have an account? <a href="{{ route('frontend.register') }}">Register here</a></p>
        </div>

    </form>
    
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
