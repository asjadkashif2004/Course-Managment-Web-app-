<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Course Hub</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            color: #e0e0e0;
        }

        .register-wrapper {
            width: 100%;
            max-width: 420px;
            background-color: #1e1e1e;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
        }

        .logo-placeholder {
            background-color: #1e1e1e;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            border-radius: 8px;
        }

        .logo-placeholder img {
            height: 70px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
            color: #ffffff;
        }

        label {
            display: block;
            margin: 15px 0 6px;
            font-weight: 500;
            color: #cccccc;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background-color: #2a2a2a;
            color: #fff;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            background-color: #333;
        }

        .error {
            color: #f87171;
            font-size: 13px;
            margin-top: 4px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #1e40af;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2563eb;
        }

        .footer-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .footer-link a {
            color: #999;
            text-decoration: none;
        }

        .footer-link a:hover {
            color: #ffffff;
        }

        @media (max-width: 480px) {
            .register-wrapper {
                margin: 20px;
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<div class="register-wrapper">
    <div class="logo-placeholder">
        <img src="https://www.freeiconspng.com/uploads/courses-icon-12.png" alt="Course Hub Logo">
    </div>

    <h2>Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('name'))
            <div class="error">{{ $errors->first('name') }}</div>
        @endif

        <!-- Email -->
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
            <div class="error">{{ $errors->first('email') }}</div>
        @endif

        <!-- Password -->
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        @if ($errors->has('password'))
            <div class="error">{{ $errors->first('password') }}</div>
        @endif

        <!-- Confirm Password -->
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
        @if ($errors->has('password_confirmation'))
            <div class="error">{{ $errors->first('password_confirmation') }}</div>
        @endif

        <button type="submit">Register</button>
    </form>

    <div class="footer-link">
        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</div>

</body>
</html>
