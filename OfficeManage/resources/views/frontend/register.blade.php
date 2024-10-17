<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - WorkPro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            min-height: 100vh; /* Ensure the body takes up at least the full height */
            overflow-y: auto; /* Allow vertical scrolling */
        }

        .register-container {
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align items at the top */
            padding: 15px;
        }

        .register-box {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 100%; /* Full width */
            max-width: 685px; /* Increased max width */
            margin: 20px; /* Add margin for spacing */
        }

        .register-box h1 {
            color: #1c4674; /* Darker color for visibility */
            margin-bottom: 30px;
            text-align: center;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            background-color: rgba(240, 248, 255, 0.8); /* Light background for contrast */
            padding: 10px; /* Padding for better spacing */
            border-radius: 5px; /* Rounded corners for aesthetics */
        }

        .form-control:focus {
            border-color: #007bff;
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

        .alert {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #033468;
        }

        /* Add some padding to the input fields */
        .form-control {
            padding: 10px;
        }

        /* Additional styling for salary input */
        .salary-input {
            display: flex;
            align-items: center;
        }

        .salary-input input {
            flex: 1; /* Make input fill available space */
        }

        .salary-input span {
            margin-left: 10px;
            font-weight: bold;
            color: #033468;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <div class="register-box">
            <h1>WorkPro Registration</h1>

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

            <form method="POST" action="{{ route('frontend.registerpost') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <div class="mb-3">
                    <label for="dateOfJoining" class="form-label">Date Of Joining</label>
                    <input type="date" class="form-control" id="dateOfJoining" name="joining" required>
                </div>

                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <select class="form-control" id="department" name="dept" required>
                        <option value="">Select Department</option>
                        <option value="Design">Graphics Design</option>
                        <option value="Business">Business</option>
                        <option value="Web Development">Web Development</option>
                        <option value="App Development">App Development</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="designation" class="form-label">Designation</label>
                    <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter your designation" required>
                </div>

                <div class="mb-3 ">
                    <label for="salary" class="form-label">Enter Salary:</label>
                    <input type="number" class="form-control" id="salary" name="salary" min="0" step="0.01" required placeholder="Enter your salary">
                
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Upload Picture</label>
                    <input type="file" class="form-control" id="file" name="file" required>
                </div>
                

                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
            <div class="footer-text">
                <p>Already have an account? <a href="{{ route('frontend.login') }}">Login</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
