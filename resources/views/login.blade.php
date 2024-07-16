<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #365E32;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-form {
            padding: 20px;
        }

        h2 {
            margin-top: 0;
            font-weight: bold;
            color: #333;
        }

        p {
            margin-bottom: 20px;
            color: #666;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="checkbox"] {
            margin-right: 10px;
        }

        .checkbox {
            margin-bottom: 20px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #3e8e41;
        }

        .links {
            margin-top: 20px;
            text-align: center;
        }

        .links a {
            color: #666;
            text-decoration: none;
        }

        .links a:hover {
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <p>Welcome back! Please login to your account.</p>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                </div>
                <div class="checkbox">
                    <label for="remember-me">
                        <input type="checkbox" id="remember-me" name="remember-me"> Remember me
                    </label>
                </div>
                <button type="submit">Login</button>
            </form>
            <div class="links" style="display:block">
                <a href="#">Forgot password?</a>
            </div>
            <div class="links" style="display:block">
                <a href="#">New User? Signup</a>
            </div>

        </div>
    </div>
</body>

</html>